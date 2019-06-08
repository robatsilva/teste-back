FROM ambientum/php:7.1-caddy

RUN mkdir -p /app

WORKDIR /app

COPY . ./

RUN composer install

RUN composer update

RUN php artisan key:generate

RUN php artisan migrate

RUN php artisan migrate

RUN php artisan migrate

RUN php artisan db:seed

