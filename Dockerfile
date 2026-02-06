FROM php:8.2-fpm-alpine

WORKDIR /var/www/html

# Dépendances système + extensions PHP
RUN apk add --no-cache \
    git unzip libzip-dev curl \
 && docker-php-ext-install pdo pdo_mysql zip

# Installer Composer (méthode OFFICIELLE)
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin \
    --filename=composer

# Vérification (debug safe)
RUN composer --version

# Copier le code Laravel
COPY . .

# Installer les dépendances PHP (sans artisan)
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction \
    --no-scripts

# Permissions Laravel
RUN mkdir -p storage bootstrap/cache \
 && chown -R www-data:www-data /var/www/html \
 && chmod -R 775 storage bootstrap/cache

CMD ["php-fpm"]
