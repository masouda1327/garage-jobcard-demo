FROM richarvey/nginx-php-fpm:latest

ENV WEBROOT /var/www/html/public
ENV SKIP_COMPOSER 1
ENV COMPOSER_ALLOW_SUPERUSER 1

COPY . /var/www/html

CMD ["/start.sh"]
