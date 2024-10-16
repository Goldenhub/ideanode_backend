# Use an official PHP runtime as a parent image
FROM php:8.1-apache

# Install system dependencies, including PostgreSQL dev libraries
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pgsql pdo pdo_pgsql

# Enable Apache mod_rewrite and configure DirectoryIndex
RUN a2enmod rewrite
RUN echo "DirectoryIndex index.php" >> /etc/apache2/apache2.conf

RUN dir /var/www/html

# Set the working directory in the container
WORKDIR /var/www/html/public

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Expose port 80 for the web server
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]