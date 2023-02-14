# [laraxel-tdd](https://github.com/axelduret/laraxel-tdd)

### Features
_**laraxel-tdd** includes :_

- laraxel-vanilla 1.0.0
- laravel 10.0.0

---

## [laraxel-vanilla](https://github.com/axelduret/laraxel-vanilla)

_**laraxel-vanilla** is just a simple **Docker** startup kit with :_

- php:8.2.2-apache-buster

- postgres:latest

- dpage/pgadmin4:latest

- redis:latest

- redislabs/redisinsight:latest

- phpstan/phpstan

---

## Installation

_After cloning this repository, move to the root directory and follow these steps :_

`cp .env.example .env`

`docker build .`

`docker compose up`

`composer install`

---

## Laravel

_If you want to install **Laravel**, move to the root directory and follow these steps :_

`cd src/Infrastructure/Laravel/`

`composer install`

_Before running migrations you will need to execute **Docker** shell :_

`docker exec -it laraxel_tdd /bin/bash`

`cd src/Infrastructure/Laravel/`

`php artisan migrate:fresh`

_Start coding and enjoy!_

> _http://localhost:8000/_

---

## phpstan

_If you want to install **phpstan**, move to the root directory and follow these steps :_

`cd tools/`

`composer install`

_Run **phpstan** from root directory :_

`tools/vendor/bin/phpstan`
