FROM php:8.3.1-apache

WORKDIR /var/www/html
COPY . /var/www/html

EXPOSE $PORT
