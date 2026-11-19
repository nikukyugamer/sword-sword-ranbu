FROM php:8.6.0-apache

WORKDIR /var/www/html
COPY . /var/www/html

EXPOSE $PORT
