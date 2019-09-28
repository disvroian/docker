FROM nginx:1.13

RUN rm /etc/nginx/conf.d/default.conf
RUN apt-get update && apt-get install -y vim
COPY data/* /var/certs/