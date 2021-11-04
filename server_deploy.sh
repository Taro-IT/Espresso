set -e

echo "Deploying application ..."

set -e

echo "Deploying application ..."

# Enter maintenance mode
php artisan down || true
    # Update codebase
    git pull origin main
    composer install --no-dev
    php artisan config:clear
    php artisan config:cache
    php artisan route:clear
    php artisan route:cache
# Exit maintenance mode
php artisan up

echo "Application deployed!"
