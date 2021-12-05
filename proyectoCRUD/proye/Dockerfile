FROM php:8.0.11-apache

# Copiar los archivos al VirtualHost
COPY ./app/proyecto /var/www/html

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN a2enmod headers expires rewrite

RUN apt-get update
RUN apt-get install -y
# Asignar el puerto
EXPOSE 80
