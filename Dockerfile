FROM php:7.0-apache

RUN apt-get update && docker-php-ext-install pdo_mysql