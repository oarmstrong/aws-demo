FROM php:7.1-fpm-alpine

RUN mkdir /uploads && chown www-data /uploads
RUN docker-php-ext-install pdo_mysql

COPY ./src /app
