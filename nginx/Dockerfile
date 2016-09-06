FROM nginx:stable

#CMD ["/sbin/my_init"]

#RUN apt-get update && apt-get install -y python-software-properties
#RUN add-apt-repository ppa:nginx/stable
#ENV http_proxy "http://172.22.0.187:3128/"
#ENV https_proxy "http://172.22.0.187:3128/"
#RUN apt-get update && apt-get install -y nginx php7.0-fpm php7.0-mysql
#COPY default.conf /etc/nginx/sites-available/default
COPY default.conf /etc/nginx/conf.d/default.conf
#RUN mkdir /www
#VOLUME /www
#RUN mkdir -p /etc/service/php7.0-fpm
#ADD php.sh /etc/service/php7.0-fpm/run
#RUN chmod +x /etc/service/php7.0-fpm/run
#CMD ["/etc/init.d/php7.0-fpm start"]
#RUN echo "daemon off;" >> /etc/nginx/nginx.conf
#RUN ln -sf /dev/stdout /var/log/nginx/access.log
#RUN ln -sf /dev/stderr /var/log/nginx/error.log
#RUN mkdir -p /etc/service/nginx
#ADD nginx.sh /etc/service/nginx/run
#RUN chmod +x /etc/service/nginx/run
#CMD ["/etc/init.d/nginx start"]
#
EXPOSE 80
#
#RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
