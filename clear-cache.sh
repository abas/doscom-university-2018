#!/bin/bash
echo "clearing cache file ... "
php artisan view:clear 
php artisan route:clear 
php artisan config:clear 
php artisan cache:clear 
php artisan auth:clear-resets 
php artisan clear-compiled
echo "clear done!"