#imagen base
FROM ubuntu:16.04

#instalacion de dependencias
RUN apt-get update && apt-get -y install \
wget \
php5 \
php5-mysql \
apache2 \
supervisor

RUN echo 'mysql-server mysql-server/root_password root' | \
	debconf-set-selections && \
	echo 'mysql-server mysql-server/root_password_again password root' | \
	debconf-set-selections

RUN apt-get install -qqy mysql-server

RUN wget http://wordpress.org/latest.tar.gz && \
 tar xzvf latest.tar.gz && \
 cp -R ./wordpress/* /var/www/html && \
 rm /var/www/html/index.html

RUN (/usr/bin/mysqld_safe &); sleep 5; mysqladmin -u root -proot create wordpress

COPY wp-config.php /var/www/html/wp-config.php

COPY supervisor.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 80

CMD ["/usr/bin/supervisord"]
