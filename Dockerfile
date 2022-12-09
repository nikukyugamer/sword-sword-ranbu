FROM php:8.2.0-apache

WORKDIR /var/www/html
COPY . /var/www/html

EXPOSE $PORT
