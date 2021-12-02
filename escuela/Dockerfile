FROM php:7.4-apache

# PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Copy project files to container
COPY . /var/www/html

#define the working directory
WORKDIR /var/www/html/

# Run in port 80
EXPOSE 80
