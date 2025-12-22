FROM php:8.2-fpm-alpine

RUN apk add --no-cache \
    bash \
    icu-dev \
    oniguruma-dev \
    libzip-dev \
    zip \
    unzip \
    curl

RUN docker-php-ext-install \
    intl \
    pdo \
    pdo_mysql \
    zip \
    opcache

WORKDIR /var/www/html
