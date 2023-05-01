FROM php:8.1-apache

# copy web content
COPY index.php /var/www/html/

# install dependencies
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli

# set permissions
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R u=rwX,g=rwX,o= /var/www/html/

EXPOSE 80
EXPOSE 7077
