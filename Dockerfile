FROM php:8.1.13-apache

WORKDIR /var/www/html
COPY . /var/www/html

EXPOSE $PORT
