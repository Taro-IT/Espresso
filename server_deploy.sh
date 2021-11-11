set -e

echo "Deploying application ..."

set -e

echo "Deploying application ..."

# Enter maintenance mode
php artisan down || true
    # Update codebase
    git pull origin main
   # Install/update composer dependecies
   composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

   # Run database migrations
   php artisan migrate --force

   # Clear caches
   php artisan cache:clear

   # Clear expired password reset tokens
   php artisan auth:clear-resets

   # Clear and cache routes
   php artisan route:cache

   # Clear and cache config
   php artisan config:cache

   # Clear and cache views
   php artisan view:cache
# Exit maintenance mode
php artisan up

echo "Application deployed!"
