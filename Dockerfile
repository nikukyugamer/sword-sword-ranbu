FROM php:8.4.10-apache

WORKDIR /var/www/html
COPY . /var/www/html

EXPOSE $PORT
