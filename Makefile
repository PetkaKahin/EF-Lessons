DOCKER_COMPOSE := docker compose
PHP_SERVICE := php

.DEFAULT_GOAL := help

.PHONY: help build up start stop down restart logs ps shell bash root php-version config clean prune composer composer-install composer-update composer-dump

help:
	@echo Available targets:
	@echo   make build        Build the PHP-FPM image
	@echo   make up           Build, start containers and run composer install
	@echo   make start        Start existing containers
	@echo   make stop         Stop running containers
	@echo   make down         Stop and remove containers
	@echo   make restart      Restart containers
	@echo   make logs         Follow logs for all services
	@echo   make ps           Show container status
	@echo   make shell        Open sh in the PHP container
	@echo   make bash         Open bash as root in the PHP container
	@echo   make root         Open sh as root in the PHP container
	@echo   make php-version  Show PHP version inside the container
	@echo   make composer     Run composer inside the PHP container, pass ARGS="..."
	@echo   make composer-install Install PHP dependencies
	@echo   make composer-update  Update PHP dependencies
	@echo   make composer-dump    Rebuild Composer autoload files
	@echo   make config       Validate and print docker compose config
	@echo   make clean        Stop stack and remove anonymous volumes
	@echo   make prune        Remove stopped containers and local images for this stack

build:
	$(DOCKER_COMPOSE) build

up:
	$(DOCKER_COMPOSE) up -d --build
	$(DOCKER_COMPOSE) exec $(PHP_SERVICE) composer install --no-interaction

start:
	$(DOCKER_COMPOSE) start

stop:
	$(DOCKER_COMPOSE) stop

down:
	$(DOCKER_COMPOSE) down

restart:
	$(DOCKER_COMPOSE) restart

logs:
	$(DOCKER_COMPOSE) logs -f

ps:
	$(DOCKER_COMPOSE) ps

shell:
	$(DOCKER_COMPOSE) exec $(PHP_SERVICE) sh

bash:
	$(DOCKER_COMPOSE) exec --user root $(PHP_SERVICE) bash

root:
	$(DOCKER_COMPOSE) exec --user root $(PHP_SERVICE) sh

php-version:
	$(DOCKER_COMPOSE) exec $(PHP_SERVICE) php -v

composer:
	$(DOCKER_COMPOSE) exec $(PHP_SERVICE) composer $(ARGS)

composer-install:
	$(DOCKER_COMPOSE) exec $(PHP_SERVICE) composer install --no-interaction

composer-update:
	$(DOCKER_COMPOSE) exec $(PHP_SERVICE) composer update --no-interaction

composer-dump:
	$(DOCKER_COMPOSE) exec $(PHP_SERVICE) composer dump-autoload

config:
	$(DOCKER_COMPOSE) config

clean:
	$(DOCKER_COMPOSE) down -v --remove-orphans

prune:
	$(DOCKER_COMPOSE) down --remove-orphans --rmi local
