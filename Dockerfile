FROM php:8.2

# Install Laravel dependencies
RUN apt-get update && apt-get install -y \
    git unzip zip curl libpng-dev libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip

# Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project
COPY . .

# Cài package
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage

# Laravel cần key để chạy
RUN php artisan config:clear && php artisan route:clear

# Expose port
EXPOSE 8000

# Entrypoint dùng shell để biến $PORT được parse đúng
ENTRYPOINT ["/bin/sh", "-c", "php artisan serve --host=0.0.0.0 --port=${PORT:-8000}"]
