# Utilizează imaginea de bază Debian
FROM debian:latest

# Montează volume pentru datele MySQL și loguri
VOLUME /var/lib/mysql
VOLUME /var/log

# Instalează Apache, PHP, MariaDB și Supervisor
RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php php-mysql mariadb-server supervisor wget && \
    apt-get clean

# Descarcă și extrage WordPress manual
RUN wget -O /tmp/latest.tar.gz https://wordpress.org/latest.tar.gz && \
    tar -xzf /tmp/latest.tar.gz -C /var/www/html/ --strip-components=1 && \
    chown -R www-data:www-data /var/www/html/ && \
    rm /tmp/latest.tar.gz

# Copiază scriptul de inițializare pentru MariaDB
COPY files/mariadb/init.sql /init.sql

# Copiază fișierele de configurare pentru Apache
COPY files/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY files/apache2/apache2.conf /etc/apache2/apache2.conf

# Copiază fișierele de configurare pentru PHP
COPY files/php/php.ini /etc/php/8.2/apache2/php.ini

# Copiază fișierele de configurare pentru MariaDB
COPY files/mariadb/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

# Copiază fișierul de configurare pentru Supervisor
COPY files/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Copiază fișierul de configurare pentru WordPress
COPY files/wp-config.php /var/www/html/wp-config.php

# Creează directorul pentru socket-ul MySQL
RUN mkdir /var/run/mysqld && chown mysql:mysql /var/run/mysqld

RUN service mariadb start && mysql < /init.sql


# Expune portul 80 pentru acces la Apache
EXPOSE 80

# Pornește Supervisor pentru a gestiona Apache și MariaDB
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
