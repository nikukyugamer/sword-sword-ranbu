FROM php:8.2.4-apache

WORKDIR /var/www/html
COPY . /var/www/html

EXPOSE $PORT
