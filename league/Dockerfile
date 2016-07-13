FROM silintl/php7
RUN apt-get update
RUN apt-get -y install curl git

RUN mkdir -p /var/www/

ADD ./ /var/www/league
ADD ./vhost-config.conf /etc/apache2/sites-enabled/vhost-config.conf 

WORKDIR /var/www/league

EXPOSE 80
