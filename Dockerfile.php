FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libicu-dev \
    && docker-php-ext-install pdo_mysql zip intl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY nginx.conf /etc/nginx/conf.d/default.conf

COPY . /var/www/html

RUN composer install --prefer-dist --no-progress --no-suggest --no-interaction

WORKDIR /var/www/html
