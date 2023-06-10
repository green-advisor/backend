# Menggunakan image PHP Alpine sebagai dasar
FROM php:7.4-fpm-alpine

# Menginstal dependensi yang diperlukan oleh Laravel
RUN apk update && apk add --no-cache \
    build-base \
    libpng-dev \
    libjpeg-turbo-dev \
    libwebp-dev \
    zlib-dev \
    libzip-dev \
    jpeg-dev \
    zip \
    unzip \
    curl \
    git \
    nano

# Menginstal extension PHP yang diperlukan oleh Laravel
RUN docker-php-ext-install pdo_mysql bcmath gd zip

# Menginstal composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Membuat direktori kerja di dalam container
WORKDIR /var/www/html

# Menyalin kode sumber Laravel ke dalam container
COPY . .

# Mengatur permission agar user www-data dapat mengakses folder storage dan cache
RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

# Men-generate autoload dan cache untuk Laravel
RUN composer install --no-scripts --no-autoloader
RUN composer dump-autoload
RUN php artisan config:cache
RUN php artisan route:cache

# Expose port yang akan digunakan oleh web server (misalnya port 8000)
EXPOSE 8000

# Menjalankan perintah saat container dijalankan
CMD php artisan serve --host=0.0.0.0 --port=8000
