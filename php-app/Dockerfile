FROM phpdockerio/php:7.4-cli

WORKDIR /app
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get install  -y software-properties-common wget gnupg
RUN wget -qO - https://packages.confluent.io/deb/7.4/archive.key | apt-key add -
#RUN add-apt-repository "deb http://deb.debian.org/debian bullseye-backports main contrib non-free"
RUN add-apt-repository "deb [arch=amd64] https://packages.confluent.io/deb/7.4 stable main"
RUN add-apt-repository "deb https://packages.confluent.io/clients/deb $(lsb_release -cs) main"
RUN apt-get update && apt-get install -y  git zip libcurl4 libcurl4-openssl-dev libffi-dev librdkafka-dev
# Install required PHP extensions
#RUN docker-php-ext-install mysqli pdo pdo_mysql curl ffi

# Install Debezium PHP Connector
COPY composer.json .
#COPY composer.lock .

RUN    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    composer install --no-scripts --no-autoloader --no-interaction --no-progress --prefer-dist

COPY . .

CMD [ "php", "cdc-script.php" ]