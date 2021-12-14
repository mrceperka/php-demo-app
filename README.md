# PHP demo app

## TODO features

Scan code for `TODO feature`.

Pick a feature that sounds interesting to you and implement it.

`TODO features` are focused on design, database, testing and tooling.

The difficulty of each feature varies.

## Setup

### 1. step

Create empty file and start composition

```shell
touch .env.local
docker-compose up
```

### 2. step

Wait for the first step, then reset the database with following the command:

```shell
docker-compose exec -u $UID php php bin/console.php mig:res
```

## Tests

In order to run the tests, the docker composition has to be running.

```shell
docker-composer exec -u $UID php composer run tests
```

## Api

Public HTTP API provided by this demo.

Default http address is: http://172.22.0.20.

### Routes

- http://172.22.0.20/api/ingredient/1 (GET)
- http://172.22.0.20/api/ingredient/create-random (POST)
- http://172.22.0.20/api/ingredient (POST)

### Utils

- Adminer: http://172.22.0.20/adminer.php?server=mariadb&username=demo&db=demo
- PHP info: http://172.22.0.20/info.php
