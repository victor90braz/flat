#!/usr/bin/env bash

# Stop script execution if there is an error or a non 0 return code...
set -e

env=${APP_ENV:-production}
role=${CONTAINER_ROLE:-app}

echo "Running in the '$env' environment..."
echo "The role is $role...";

if [ "$role" = "app" ]; then
    ln -sf /etc/supervisor/conf.d-available/app.conf /etc/supervisor/conf.d/app.conf
    exec supervisord -c /etc/supervisor/supervisord.conf

elif [ "$role" = "queue" ]; then
    ln -sf /etc/supervisor/conf.d-available/queue.conf /etc/supervisor/conf.d/queue.conf
    exec supervisord -c /etc/supervisor/supervisord.conf

elif [ "$role" = "scheduler" ]; then
    # Rather than installing and configuring cron we can use an while loop to run the artisan schedule command every 60 seconds...
    while [ true ]
    do
        php /var/www/html/artisan schedule:run --verbose --no-interaction &
        sleep 60
    done
else
    echo "Could not match the container role '$role'"
    exit 1
fi
