FROM php:fpm

ENV http_proxy="http://172.22.0.187:3128" \
    https_proxy="http://172.22.0.187:3128"

RUN apt-get update && apt-get install -y \
    libmcrypt-dev \
    && docker-php-ext-install pdo_mysql mcrypt

ADD php.ini /usr/local/etc/php/conf.d/

EXPOSE 9000

RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*