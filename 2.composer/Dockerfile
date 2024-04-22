FROM composer:2 AS build

#compiamos nuestra app al contenedor builder (composer)
COPY . /app

# instalamos dependencias de composer
RUN cd /app && composer install --no-dev

# ----------

FROM php:8.3-apache

# Copiamos desde build (composer)
COPY --from=build /app /var/www/html
 
# Habilitamos mod_rewrite y definimos permisos
RUN a2enmod rewrite; \
    chown -R www-data:www-data /var/www/html


# Remplazamos el vhost por defecto por el nuestro
COPY vhost.conf /etc/apache2/sites-available/000-default.conf