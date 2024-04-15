#!/bin/bash

# Config WP
chown -R www-data:www-data /var/www/html

# Start Apache
exec apachectl -DFOREGROUND
