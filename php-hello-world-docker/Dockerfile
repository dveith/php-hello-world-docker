FROM centos:latest

# Install dependencies
RUN yum -y update
RUN yum -y install httpd
RUN yum -y install  php php-curl php-devel php-gd php-pecl-memcache php-pspell php-snmp php-xmlrpc php-xml

# Install app
RUN rm -rf /var/www/html*
ADD src /var/www/html

# Configure TERM
ENV TERM xterm

#EXPOSE 80

CMD ["/usr/sbin/httpd", "-D",  "FOREGROUND"]
