FROM php:8.1-fpm

WORKDIR /var/www/html

# Production opcache settings...
ENV PHP_OPCACHE_VALIDATE_TIMESTAMPS=0 \
    PHP_OPCACHE_MAX_ACCELERATED_FILES=9000 \
    PHP_OPCACHE_MEMORY_CONSUMPTION=128

RUN apt-get update -yqq \
    && apt-get install -y --no-install-recommends \
        ssh \
        git \
        nginx \
        supervisor \
        procps \
        nano \
        libpng-dev \
        libjpeg-dev \
        zip \
        unzip \
        libzip-dev \
        libicu-dev \
    && pecl install redis pcov \
    && docker-php-ext-enable redis opcache pcov \
    && docker-php-ext-configure gd \
         --with-jpeg \
    && docker-php-ext-install pcntl pdo_mysql gd zip intl exif

# Nginx...
COPY docker/config/nginx/default /etc/nginx/sites-available/default
COPY docker/config/nginx/h5bp /etc/nginx/h5bp

# PHP ...
COPY docker/config/php/php-fpm.d/docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf
COPY docker/config/php/conf.d/*.ini /usr/local/etc/php/conf.d/
COPY docker/config/php/php.ini /usr/local/etc/php/php.ini

# Supervisor...
COPY docker/config/supervisor/supervisord.conf /etc/supervisor/supervisord.conf
COPY docker/config/supervisor/conf.d/*.conf /etc/supervisor/conf.d-available/

# Init scripts...
COPY docker/start.sh /usr/local/bin/start

COPY . /var/www/html

RUN curl -s https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && chmod +x /usr/local/bin/composer \
    && composer check-platform-reqs \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 2755 /var/www/html/storage \
    && chmod +x /usr/local/bin/start \
    # link fpm logs to a readable file...
    && ln -sf /dev/stdout /var/log/nginx/access.log \
    && ln -sf /dev/stderr /var/log/nginx/error.log

# WORKDIR /var/www/html/

CMD ["/usr/local/bin/start"]
