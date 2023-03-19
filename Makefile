_ENV=.env.dev
SHELL := /bin/bash
.ONESHELL:

start: 
	@echo "Starting..."
	docker-compose up -d
stop:
	@echo "Stopping..."
	docker-compose down

restart: stop start

destroy:
	@echo "Destroying..."
	docker-compose down -v --rmi all

Restart: destroy start

logs:
	docker-compose logs -f --tail 150

logs_f:
	docker logs app -f --tail 100

build-image:
	docker-compose up --remove-orphans --build --no-start backend
	
deploy: build-image
	docker-compose restart app
