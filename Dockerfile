FROM php:8.4.12-apache

WORKDIR /var/www/html
COPY . /var/www/html

EXPOSE $PORT
