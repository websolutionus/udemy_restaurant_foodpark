# syntax=docker/dockerfile:1.7

# =========================================================
# Stage 1: PHP dependencies
# =========================================================

FROM php:8.2-cli-bookworm AS vendor

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        unzip \
        libfreetype6-dev \
        libicu-dev \
        libjpeg62-turbo-dev \
        libonig-dev \
        libpng-dev \
        libzip-dev \
    && docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
    && docker-php-ext-install -j2 \
        bcmath \
        exif \
        gd \
        intl \
        mbstring \
        pdo_mysql \
        zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2.8 /usr/bin/composer /usr/local/bin/composer

WORKDIR /app

COPY main-files/ ./

RUN composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --no-progress \
    --no-scripts \
    --optimize-autoloader

# =========================================================
# Stage 2: Frontend assets
# =========================================================

FROM node:22-alpine AS frontend

WORKDIR /app

COPY main-files/package.json main-files/package-lock.json ./

RUN npm ci

COPY main-files/ ./

RUN npm run build


# =========================================================
# Stage 3: PHP-FPM application
# =========================================================

FROM php:8.2-fpm-bookworm AS app

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libcurl4-openssl-dev \
        libfreetype6-dev \
        libicu-dev \
        libjpeg62-turbo-dev \
        libonig-dev \
        libpng-dev \
        libzip-dev \
    && docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" \
        bcmath \
        curl \
        exif \
        gd \
        intl \
        mbstring \
        opcache \
        pdo_mysql \
        zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

COPY docker/php/php.ini /usr/local/etc/php/conf.d/99-foodpark.ini

COPY --from=vendor --chown=www-data:www-data /app /var/www/html

COPY --from=frontend --chown=www-data:www-data \
    /app/public/build \
    /var/www/html/public/build

COPY docker/php/entrypoint.sh /usr/local/bin/foodpark-entrypoint

RUN chmod +x /usr/local/bin/foodpark-entrypoint \
    && rm -rf /var/www/html/public/storage \
    && ln -s ../storage/app/public /var/www/html/public/storage

EXPOSE 9000

ENTRYPOINT ["foodpark-entrypoint"]

CMD ["php-fpm"]


# =========================================================
# Stage 4: Nginx
# =========================================================

FROM nginx:1.27-alpine AS web

WORKDIR /var/www/html

RUN rm -f /etc/nginx/conf.d/default.conf

COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

COPY --from=vendor /app/public /var/www/html/public

COPY --from=frontend \
    /app/public/build \
    /var/www/html/public/build

RUN mkdir -p /var/www/html/storage/app/public \
    && rm -rf /var/www/html/public/storage \
    && ln -s ../storage/app/public /var/www/html/public/storage

EXPOSE 80
