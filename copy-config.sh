#!/bin/bash
# Copy the custom Roundcube configuration to the correct location
cp /tmp/custom_config.inc.php /var/www/html/config/config.inc.php

# Execute the original entrypoint script for Roundcube
docker-php-entrypoint apache2-foreground

