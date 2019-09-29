FROM php:7.2-fpm

# Install PDO MySQL driver
# See https://github.com/docker-library/php/issues/62
RUN docker-php-ext-install pdo mysqli
RUN docker-php-ext-install pdo_mysql

RUN apt-get update && apt-get install -y \
        vim \
        git \
        openssh-client \
        cron \
        ntpdate \
        curl \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libxslt-dev \
        libpng-dev \
        zlib1g-dev \
        libxml2-dev \
    && docker-php-ext-install -j$(nproc) iconv ctype soap zip xsl bcmath json dom hash \
    && docker-php-ext-configure intl \
	&& docker-php-ext-install intl \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

RUN pecl install redis \
    && docker-php-ext-enable redis

ENV TZ=Europe/Paris
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

#COPY conf/php-fpm.conf /usr/local/etc/php-fpm.conf
#COPY conf/php.ini /usr/local/etc/php/php.ini