FROM php:8.1-fpm-alpine

# Update and install required packages
RUN apk update && \
    apk add --no-cache \
        git \
        unzip \
        libzip-dev \
        libpng-dev \
        libjpeg-turbo-dev \
        libwebp-dev \
        freetype-dev && \
    docker-php-ext-configure gd --with-jpeg --with-freetype --with-webp && \
    docker-php-ext-install -j$(nproc) \
        pdo_mysql \
        exif \
        pcntl \
        gd \
        zip \
        opcache && \
    docker-php-source delete && \
    apk del --no-cache --purge

# Install Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Install dependencies
RUN composer install --no-interaction --no-plugins --no-scripts --prefer-dist

# Set permissions
RUN chown -R www-data:www-data storage && \
    chown -R www-data:www-data bootstrap/cache && \
    chmod -R a+rwx storage && \
    chmod -R a+rwx bootstrap/cache

# Copy environment variables
COPY .env.example .env

# Generate application key
RUN php artisan key:generate

# Expose port 8000
EXPOSE 8000

# Start the application
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
