# [laraxel-tdd](https://github.com/axelduret/laraxel-tdd)

### Features

_**laraxel-tdd** includes :_

-   laraxel-vanilla 1.0.0
-   laravel 10.0.0

---

## [laraxel-vanilla](https://github.com/axelduret/laraxel-vanilla)

_**laraxel-vanilla** is just a simple **Docker** startup kit with :_

-   php:8.2.2-apache-buster

-   postgres:latest

-   dpage/pgadmin4:latest

-   redis:latest

-   redislabs/redisinsight:latest

-   phpstan/phpstan

---

## Installation

_After cloning this repository, move to the root directory and follow these steps :_

`cp .env.example .env`

`docker build .`

`docker compose up`

`composer install`

---

## Laravel

_To install **Laravel** :_

`cd src/Infrastructure/Laravel/`

`cp .env.example .env`

`composer install`

_Before using **php artisan** you will probably need to execute **Docker** shell :_

`docker exec -it laraxel_tdd /bin/bash`

_Then inside Docker shell :_

`cd src/Infrastructure/Laravel/`

`php artisan <command>`

---

## Laravel Pint

_Run **laravel pint** from root directory :_

`composer pint`

---

## PHPStan

_To install **phpstan** :_

`cd tools/`

`composer install`

_Run **phpstan** from root directory :_

`composer phpstan`

---

## Docker

_Run **Docker** shell from root directory :_

`composer docker`

---

_Start coding and enjoy!_

_https://laraxel.com_
