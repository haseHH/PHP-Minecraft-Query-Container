FROM php:8-apache

RUN mkdir /var/www/html/lib; \
    curl https://raw.githubusercontent.com/xPaw/PHP-Minecraft-Query/master/src/MinecraftPing.php \
        --output /var/www/html/lib/MinecraftPing.php --silent; \
    curl https://raw.githubusercontent.com/xPaw/PHP-Minecraft-Query/master/src/MinecraftPingException.php \
        --output /var/www/html/lib/MinecraftPingException.php --silent

COPY src/ /var/www/html/