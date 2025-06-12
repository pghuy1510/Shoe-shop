FROM php:8.2

# Cài các extension Laravel cần
RUN apt-get update && apt-get install -y \
    git unzip zip curl libpng-dev libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip

# Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project code
WORKDIR /var/www
COPY . .

# Cài các package Laravel
RUN composer install

# Mở cổng cho Render
EXPOSE 8000

# Lệnh chạy Laravel
CMD php artisan serve --host=0.0.0.0 --port=$PORT
