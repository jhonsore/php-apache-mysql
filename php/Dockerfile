FROM php:7.1.33-fpm-alpine3.9
RUN apk update; \
    apk upgrade;
RUN docker-php-ext-install mysqli pdo pdo_mysql
