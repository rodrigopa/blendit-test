FROM php:8.3-fpm

RUN apt-get update && apt-get install -y git unzip zip

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN docker-php-ext-install pdo_mysql mysqli

WORKDIR /var/www/html

COPY --from=composer:2.6.3 /usr/bin/composer /usr/bin/composer

#CMD bash -c "php -S 0.0.0.0:8001 -t ./"

CMD ["php-fpm"]

EXPOSE 9000
