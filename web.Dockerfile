FROM nginx:1.10

ADD ./build/nginx.conf  /etc/nginx/conf.d/default.conf