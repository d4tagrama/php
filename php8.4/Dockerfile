FROM composer/composer
FROM php:8.4-apache
COPY --from=0 /usr/bin/composer /usr/bin/composer  



RUN apt-get update && apt-get install -y \
    libbz2-dev \
    libcurl4-openssl-dev \
    libexif-dev \
    libgd-dev \
    libgettextpo-dev \
    libicu-dev \
    libjpeg-dev \
    libpng-dev \
    libwebp-dev \
    libxpm-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libxslt1-dev \
    libzip-dev \
    libsqlite3-dev \
    libsodium-dev \
    imagemagick \
    libmagickwand-dev  \
    zlib1g-dev  \
    git zip unzip libssl-dev libpcre3-dev \
    build-essential pkg-config 
RUN docker-php-ext-install  bz2 \
    calendar \
    ctype \
    curl \
    dom \
    exif \
    fileinfo \
    gd \
    gettext \
    iconv \
    mbstring \
    mysqli \
    pdo \
    pdo_mysql \
    pdo_sqlite 
RUN docker-php-ext-install posix \
    shmop \
    simplexml \
    soap \
    sockets \
    sodium \
    sysvmsg \
    sysvsem \
    sysvshm \
    xml \
    xmlwriter \
    xsl \
    zip && apt-get clean && rm -rf /var/lib/apt/lists/*

# Receive APACHA_DOCUMENT_ROOT ARG from docker compose file and creates the DocumentRoot.
ARG APACHE_DOCUMENT_ROOT
ENV APACHE_DOCUMENT_ROOT=${APACHE_DOCUMENT_ROOT}

WORKDIR ${APACHE_DOCUMENT_ROOT}
RUN chown -R www-data:www-data ${APACHE_DOCUMENT_ROOT}
RUN echo "ServerTokens Prod" >> /etc/apache2/apache2.conf && echo "ServerSignature Off" >> /etc/apache2/apache2.conf

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" &&  echo "date.timezone=America/Mexico_City" > /usr/local/etc/php/conf.d/timezone.ini

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

