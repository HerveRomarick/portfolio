# Utilise une image officielle avec PHP 8.2 (ou 8.3 / 8.1 selon tes besoins)
FROM php:8.2-fpm-alpine

# Installe les dépendances système nécessaires pour Laravel
RUN apk add --no-cache \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install pdo_mysql zip

# Installe Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copie ton code
WORKDIR /var/www/html
COPY . .

# Installe les dépendances PHP
RUN composer install --optimize-autoloader --no-dev --no-interaction

# Permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose le port (PHP-FPM)
EXPOSE 9000

CMD ["php-fpm"]

# ... suite du Dockerfile précédent ...

# Installe Nginx
RUN apk add --no-cache nginx

COPY nginx.conf /etc/nginx/http.d/default.conf

CMD ["sh", "-c", "nginx && php-fpm"]