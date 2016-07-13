FROM silintl/php7
RUN apt-get update
RUN apt-get -y install curl git
COPY vhost-config.conf /etc/apache2/sites-enabled/

RUN mkdir -p /var/www/

ADD ./league /var/www/league

WORKDIR /var/www/league

EXPOSE 80
