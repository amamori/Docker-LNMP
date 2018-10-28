FROM php:7.2-fpm
# docker-php-ext-install : 拡張機能をインストールする
# docker-php-ext-configure : 拡張機能をインストールする際に必要な設定情報を決めておく
# -j$(nproc) : 並列処理。
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) mysqli pdo_mysql mbstring