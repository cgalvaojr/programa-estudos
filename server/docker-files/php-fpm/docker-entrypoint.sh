#!/bin/bash
set -e

echo "[ ****************** ] Starting Endpoint of Application"

if [ "$UPDATE_COMPOSER_DEPENDENCIES" == "true" ]; then
	echo "[ ****************** ] composer dependencies."
    composer install --ignore-platform-reqs --no-interaction --verbose --no-suggest --no-dev
fi

if  ! [ -e "/application/.env" ] ; then
     echo "[ ****************** ] Copying sample application configuration to real one"
     cp /application/.env.example /application/.env


     php artisan migrate:refresh --seed
fi

chmod -R 777 /application/storage
chmod -R 777 /aplication/bootstrap/cache

echo "[ ****************** ] Ending Endpoint of Application"

if [ "$USE_PHP_FPM" == "true" ]; then
    set -- php-fpm
fi

exec "$@"
