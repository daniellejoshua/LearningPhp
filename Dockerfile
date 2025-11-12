# Use the official PHP 8.2 image with Apache
FROM php:8.2-apache

# Install and enable required PHP extensions
RUN docker-php-ext-install mysqli pdo_mysql && docker-php-ext-enable mysqli pdo_mysql

# Copy application source code into the container
COPY src/ /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Expose port 80 for the Apache server
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]