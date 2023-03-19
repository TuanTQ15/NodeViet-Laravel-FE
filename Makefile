_ENV=.env.dev
SHELL := /bin/bash
.ONESHELL:

start: 
	@echo "Starting..."
	composer install
	docker-compose up -d
stop:
	@echo "Stopping..."
	docker-compose down

restart: stop start

destroy:
	@echo "Destroying..."
	docker-compose down -v --rmi all
	sudo rm -rf data

Restart: destroy start

logs:
	docker-compose logs -f --tail 150

logs_f:
	docker logs app -f --tail 100

build-image:
	docker-compose up --remove-orphans --build --no-start laravel-app
	
deploy: build-image
	docker-compose restart app
