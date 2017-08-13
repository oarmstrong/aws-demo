FROM nginx:stable-alpine

RUN mkdir /uploads && chown 82 /uploads
COPY docker/web/nginx.conf /etc/nginx/nginx.conf
COPY ./src /app
