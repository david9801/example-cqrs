FROM php:8.3-fpm

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y --no-install-recommends ${PHPIZE_DEPS} \
    vim debconf apt-transport-https apt-utils  build-essential locales acl mailutils \
    wget zip unzip gnupg gnupg1 gnupg2 less cron apt-transport-https apt-utils \
    build-essential locales acl pv htop g++ \
    libbz2-dev libc-client-dev libcurl4-gnutls-dev libedit-dev libfreetype6-dev \
    libicu-dev libjpeg62-turbo-dev libkrb5-dev libldap2-dev libldb-dev libmagickwand-dev \
    libmcrypt-dev libmemcached-dev libpng-dev libpq-dev libsqlite3-dev libssl-dev \
    libreadline-dev libxslt1-dev libzip-dev memcached zlib1g-dev gcc make autoconf \
    libc-dev pkg-config libonig-dev procps libwebp-dev git

RUN docker-php-ext-install bcmath
RUN docker-php-ext-install bz2
RUN docker-php-ext-install calendar
RUN docker-php-ext-install gettext
RUN docker-php-ext-install opcache
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install soap
RUN docker-php-ext-install xsl
RUN docker-php-ext-configure zip && docker-php-ext-install zip
RUN docker-php-ext-install exif
RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg --with-webp && docker-php-ext-install gd
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl && docker-php-ext-install imap
RUN docker-php-ext-configure intl && docker-php-ext-install intl
RUN docker-php-ext-configure ldap && docker-php-ext-install ldap

RUN rm -rf /tmp/pear ~/.pearrc

RUN pecl update-channels
RUN pecl install mcrypt-1.0.7 && docker-php-ext-enable mcrypt
RUN pecl install redis && docker-php-ext-enable redis
RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN mkdir -p /usr/src/php/ext/imagick; \
    curl -fsSL https://github.com/Imagick/imagick/archive/refs/tags/3.7.0.tar.gz | tar xvz -C "/usr/src/php/ext/imagick" --strip 1; \
    docker-php-ext-install imagick;

# https://github.com/docker-library/php/issues/1245
# https://github.com/docker-library/php/issues/1245#issuecomment-1020146157
ENV CFLAGS="$CFLAGS -D_GNU_SOURCE"
RUN docker-php-ext-configure sockets
RUN docker-php-ext-install sockets

RUN apt-get update && \
    apt-get -y --no-install-recommends install git && \
    php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

COPY ./etc/php/config/php.ini /usr/local/etc/php
COPY ./etc/php/config/docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Cleaning
#RUN docker-php-source delete
#RUN apt-get remove -y g++ wget
RUN apt-get autoremove --purge -y && apt-get autoclean -y && apt-get clean -y
RUN rm -rf /var/lib/apt/lists/*
RUN rm -rf /tmp/{*,.*} && \
    rm -rf /var/tmp/{*,.*}

# Setting the same user in docker and host
ARG USER_ID
ARG GROUP_ID

COPY ./etc/php/changeuser.sh /home/
RUN chmod 777 /home/changeuser.sh
RUN /home/changeuser.sh

USER www-data

WORKDIR /var/www/api

EXPOSE 9000
