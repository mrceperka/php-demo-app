ROOT=/var/docker

mkdir "$ROOT/log" "$ROOT/temp" || true
chmod -R 777 "$ROOT/log" "$ROOT/temp"

composer install

php-fpm
