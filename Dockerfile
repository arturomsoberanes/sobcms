# Use an official PHP runtime as the base image
FROM php:8.1-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the local project files into the container at /var/www/html
COPY . /var/www/html

# Install system dependencies, PHP extensions, and PostgreSQL client
RUN apt update && \
    apt install -y \
    vim \
    git \
    unzip \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql

# This will allow us use our .htacces
RUN sed -i 's/Listen 80/Listen 443/g' /etc/apache2/ports.conf
RUN sed -i '/<VirtualHost \*:80>/a <Directory /var/www/html>\n    Options Indexes FollowSymLinks\n    AllowOverride All\n    Require all granted\n</Directory>' /etc/apache2/sites-available/000-default.conf
RUN sed -i '/<VirtualHost \*:443>/a <Directory /var/www/html>\n    Options Indexes FollowSymLinks\n    AllowOverride All\n    Require all granted\n</Directory>' /etc/apache2/sites-available/default-ssl.conf

RUN a2enmod rewrite

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install project dependencies
RUN composer install

# Expose port 443 to the outside world
EXPOSE ${PORT:-443}

# Command to run the PHP application
CMD ["apache2-foreground"]