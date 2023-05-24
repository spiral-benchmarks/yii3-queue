FROM php:8.2-cli-alpine

RUN apk --no-cache add \
        git \
        icu-dev \
        bash \
        linux-headers && \
    docker-php-ext-install \
        intl \
        opcache \
        pdo_mysql \
        > /dev/null

ENV XDEBUG_MODE=off
ENV XDEBUG_CONFIG=""
RUN apk add --update --no-cache --virtual .build-dependencies zlib-dev $PHPIZE_DEPS \
        && docker-php-ext-install pcntl sockets \
        && pecl install apcu \
        && docker-php-ext-enable apcu \
        && pecl install xdebug \
        && docker-php-ext-enable xdebug \
        && pecl clear-cache \
        && git clone https://github.com/NoiseByNorthwest/php-spx.git  \
        && cd php-spx  \
        && git checkout release/latest  \
        && phpize  \
        && ./configure  \
        && make  \
        && make install \
        && apk del .build-dependencies

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www

RUN addgroup -g 1000 appuser && \
    adduser -D -u 1000 -G appuser appuser && \
    chown appuser:appuser .

USER appuser
