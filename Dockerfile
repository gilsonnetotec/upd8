FROM php:8.1.2-apache
WORKDIR /var/www/html
COPY . /var/www/html
RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite
ENV APP_ENV=production
ENV APP_KEY=12345678
EXPOSE 80
CMD ["apache2-foreground"]
