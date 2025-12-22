FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy composer files dari folder src
COPY src/composer.json src/composer.lock* ./

# Install dependencies
RUN composer install --no-dev --no-scripts --no-autoloader --no-interaction

# Copy semua file dari folder src
COPY src/ /var/www/html/

# Generate autoload
RUN composer dump-autoload --optimize --no-dev

# Copy nginx config
COPY docker/nginx/default.conf /etc/nginx/sites-available/default

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

EXPOSE 80

# Start services
CMD service nginx start && php-fpm
