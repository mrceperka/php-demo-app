FROM webgarden/php:8.0.12-fpm-buster

RUN apt-get update && apt-get install --no-install-recommends -y nano
RUN docker-php-ext-install opcache

ADD command.sh /var/docker-command.sh
RUN chmod +x /var/docker-command.sh

WORKDIR /var/docker
