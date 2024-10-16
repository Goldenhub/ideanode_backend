# Use the official PHP image with NGINX
FROM php:8.1-fpm

# Install system dependencies, including PostgreSQL dev libraries
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pgsql pdo pdo_pgsql

# Copy the NGINX configuration
COPY nginx.conf /etc/nginx/sites-available/default

# Copy the project files to the container
COPY . /var/www/html

# Expose port 80
EXPOSE 80

# Start NGINX and PHP-FPM
CMD ["nginx", "-g", "daemon off;"]