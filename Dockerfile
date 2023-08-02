
# Use an official PHP runtime as the base image
FROM php:8.1-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the local project files into the container at /var/www/html
COPY . /var/www/html

# Install system dependencies and PHP extensions
RUN apt-get update && \
    apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo pdo_mysql

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install project dependencies
RUN composer install

# Expose port 80 to the outside world
EXPOSE 80

# Command to run the PHP application
CMD ["apache2-foreground"]