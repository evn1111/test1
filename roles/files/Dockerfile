# Use an official PHP image as a base
FROM php:8.0-fpm

# Install any dependencies if needed
RUN docker-php-ext-install pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Expose port 9000 for PHP-FPM
EXPOSE 9000
