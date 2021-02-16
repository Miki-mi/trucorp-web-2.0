FROM php:7.4.12-apache

RUN apt-get update
USER root

COPY index.php /var/www/html
RUN chown -R www-data:www-data /var/www/
RUN chmod 774 /var/www/

RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
