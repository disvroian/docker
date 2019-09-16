FROM php:7.2-fpm

# Install PDO MySQL driver
# See https://github.com/docker-library/php/issues/62
RUN docker-php-ext-install pdo mysqli
RUN docker-php-ext-install pdo_mysql

RUN apt-get update && apt-get install -y \
        cron \
        git \
        gzip \
        libfreetype6-dev \
        libicu-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        libxslt-dev \
        lsof \
        default-mysql-client \
        vim \
        zip \
        ntpdate \
        curl 

RUN docker-php-ext-install intl && docker-php-ext-configure intl
RUN docker-php-ext-install iconv ctype soap zip xsl 
RUN docker-php-ext-install gd && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/

RUN pecl install redis && docker-php-ext-enable redis

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

ENV TZ=Europe/Paris
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN usermod -u 1000 www-data