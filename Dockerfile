FROM php:8.2-apache
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip
# instal ekstensi PHP yg diperlukan
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd
COPY . /var/www/html
