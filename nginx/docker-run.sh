#!/bin/bash
# docker volume create php-vol
docker network create php-net
docker build -t nginx-php . && docker run --mount type=bind,source="${pwd}/src/",target=/usr/share/nginx/html --net php-net -p 80:80 -it --rm --name nginx nginx-php 