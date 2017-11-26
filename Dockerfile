FROM php:apache
RUN a2enmod rewrite
RUN service apache2 restart
EXPOSE 80
# COPY . /var/www/html
