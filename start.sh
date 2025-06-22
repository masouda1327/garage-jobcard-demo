#!/usr/bin/env bash

composer install --no-dev --working-dir=/var/www/html
php artisan key:generate --show > /tmp/appkey
export APP_KEY=$(cat /tmp/appkey)

php artisan config:cache
php artisan route:cache

php-fpm
