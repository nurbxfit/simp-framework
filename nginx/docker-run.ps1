# Create Docker network
docker network create php-net

# Build the Docker image
docker build -t nginx-php .

# Run the Docker container
docker run --mount type=bind, source=${PWD}\src, target=/usr/share/nginx/html --net php-net -p 80:80 -it --rm --name nginx nginx-php