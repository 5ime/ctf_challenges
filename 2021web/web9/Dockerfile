FROM php:7.3-apache
COPY files /var/www/html
RUN chmod 755 /var/www/html && \
    chown root:root /var/www/html && \
    chmod +x /var/www/html/start.sh
CMD /var/www/html/start.sh
EXPOSE 80
