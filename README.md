## Dev

```bash
composer create-project laravel/laravel travel-api
cd travel-api
php artisan make:model Role -m
php artisan make:migration create_role_user_table
php artisan make:model Travel -m
php artisan make:model Tour -m
```
