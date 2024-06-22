#!/bin/bash
# Copy the custom Roundcube configuration to the correct location
echo "COPY CONFIG FILE..."

echo "ALFS >> this is the origin file location:"
ls -la /tmp/roundcube-config/
echo "ALFS >> this is the destination:"
ls -la /var/www/html/
cp /tmp/roundcube-config/custom_config.inc.php /var/www/html/config/config.inc.php

# Execute the original entrypoint script for Roundcube
docker-php-entrypoint apache2-foreground

