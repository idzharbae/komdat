FROM php:7.2.1-apache

RUN apt-get update && \
    apt-get install -y -qq git \
        libjpeg62-turbo-dev \
        apt-transport-https \
        libfreetype6-dev \
        libmcrypt-dev \
        libssl-dev \
        zip unzip \
        nano

RUN pecl install redis && docker-php-ext-enable redis
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install -j$(nproc) zip pdo pdo_mysql gd bcmath

RUN for mod in rewrite headers; do a2enmod $mod; done && service apache2 restart