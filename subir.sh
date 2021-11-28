#!/bin/bash

docker-compose down
docker-compose up -d
sleep 5
sudo docker-compose exec app php artisan migrate

# docker-compose exec app composer install

# docker-compose exec app php artisan key:generate

