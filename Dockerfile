FROM php:7.0-apache

RUN apt-get update

FROM mysql:5.7

RUN touch /var/log/mysql/mysqld.log # 指定の場所にログを記録するファイルを作る