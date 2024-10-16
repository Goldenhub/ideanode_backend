# Use an official PHP runtime as a parent image
FROM php:8.1-apache

# Install PHP extensions for PostgreSQL
RUN docker-php-ext-install pgsql pdo pdo_pgsql

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Expose port 80 for the web server
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]