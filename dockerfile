FROM ambientum/php:7.1-caddy

COPY . /var/www/app

RUN sudo chmod -R 777 /var/www

RUN composer install

RUN ls

RUN php artisan key:generate

RUN php artisan serve
