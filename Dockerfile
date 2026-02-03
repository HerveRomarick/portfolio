FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
 && docker-php-ext-install pdo_mysql mbstring bcmath gd

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
COPY . .

RUN chown -R www-data:www-data /var/www \
 && chmod -R 775 storage bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]

# Installer nginx
RUN apt update && apt install -y nginx

# Copier les fichiers
COPY . /var/www/html
COPY nginx.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www/html

# Exposer le port HTTP
EXPOSE 80

# Lancer nginx + php-fpm
CMD service nginx start && php-fpm