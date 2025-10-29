# filepath: /home/danielle/PhpProjects/php-docker/Dockerfile
FROM php:8.2-apache

# Install and enable mysqli extension
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy application source code
COPY src/ /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Expose port 80
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]