# PHP demo app

## Setup

```shell
touch .env.local
docker-compose up
```

```shell
docker-compose exec -u 1000 php php bin/console.php mig:res
```

## Api

Default http address is: http://172.22.0.20.

Adminer: http://172.22.0.20/adminer.php?server=mariadb&username=demo&db=demo

Routes:

- http://172.22.0.20/api/ingredient/1


## TODO Features

Scan code for `TODO feature` string
