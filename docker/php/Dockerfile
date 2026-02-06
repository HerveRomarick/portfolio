FROM php:8.2-fpm-alpine

WORKDIR /var/www/html

RUN apk add --no-cache \
    git \
    unzip \
    libzip-dev \
    curl \
    && docker-php-ext-install pdo pdo_mysql zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction \
    --no-scripts

COPY . .

RUN mkdir -p storage bootstrap/cache \
 && chown -R www-data:www-data /var/www/html \
 && chmod -R 775 storage bootstrap/cache

CMD ["php-fpm"]
