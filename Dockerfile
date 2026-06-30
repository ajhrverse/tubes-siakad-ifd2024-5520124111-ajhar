FROM webdevops/php-nginx:8.4

WORKDIR /app

COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN mkdir -p storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache

RUN chown -R application:application storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

ENV WEB_DOCUMENT_ROOT=/app/public
