## Dev

```bash
composer create-project laravel/laravel travel-api
cd travel-api

php artisan make:model Role -m
php artisan make:migration create_role_user_table

php artisan make:model Travel -m

composer require cviebrock/eloquent-sluggable

php artisan make:model Tour -m

php artisan make:controller Api/V1/TravelController
php artisan make:resource TravelResource

php artisan make:test TravelsListTest
php artisan make:factory TravelFactory --model=Travel

php artisan make:controller Api/V1/TourController
php artisan make:resource TourResource
php artisan make:test ToursListTest
php artisan make:factory TourFactory --model=Tour

php artisan make:seeder TourSeeder
php artisan db:seed --class=TourSeeder

php artisan make:request ToursListRequest

php artisan make:command CreateUserCommand
# php artisan users:create

php artisan make:seeder RoleSeeder
php artisan db:seed --class=RoleSeeder
```

## Install

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
```

## Test data

```
$t = App\Models\Travel::create(['name' => 'First travel', 'description' => 'test', 'number_of_days' => 5]);
$t = App\Models\Tour::create(['travel_id' => '9972b71a-e44b-418a-8644-ca81a1167712', 'name' => 'Tour on Sunday', 'starting_date' => '2023-06-11', 'ending_date' => '2023-06-16', 'price' => 99.99]);
```

```bash
php artisan migrate:fresh --seed --seeder=TourSeeder
# or 
php artisan migrate:fresh 
php artisan db:seed --class=TourSeeder
# or
php artisan migrate:fresh --seed
```
