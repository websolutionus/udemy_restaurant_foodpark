#!/bin/sh

set -eu

echo "Preparing Laravel directories..."

mkdir -p \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    storage/app/public \
    bootstrap/cache \
    public/uploads

chown -R www-data:www-data \
    storage \
    bootstrap/cache \
    public/uploads

echo "Discovering Laravel packages..."

php artisan package:discover --ansi

echo "Clearing Laravel caches..."

php artisan config:clear
php artisan route:clear
php artisan view:clear

echo "Starting PHP-FPM..."

exec "$@"
