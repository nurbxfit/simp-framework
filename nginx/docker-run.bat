@echo off
REM Create Docker network
docker network create php-net

REM Build the Docker image
docker build -t nginx-php .

REM Run the Docker container
docker run --mount type=bind,source="%CD%\src",target=/usr/share/nginx/html --net php-net -p 80:80 -it --rm --name nginx nginx-php
