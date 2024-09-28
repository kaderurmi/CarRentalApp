
                Web Development with PHP & Laravel By OSTAD Team Batch:3
Project Name: Car Rental Web Application
Project doing Process explanation:
Project Details video link Here: https://drive.google.com/file/d/1Et5kEMIH_0HO3DdJ77ZgWYnAP2PK0X_l/view?usp=drive_link
Command are use on Project:
composer create-project laravel/laravel:^10.0 Rental-Car-App
composer require laravel/breeze --dev
php artisan breeze:install
composser install

php artisan make:model User -m 
php artisan make:model Car -m 
php artisan make:model Rental -m

php artisan make:controller Admin/CarController --resource
php artisan make:controller Admin/CustomerController --resource
php artisan make:controller Admin/RentalController --resource

php artisan make:controller Frontend/RentalController --resource  
php artisan make:controller Frontend/CarController --resource
php artisan make:controller Frontend/PageController --resource
php artisan make:controller adminController --resource
php artisan make:controller profileController --resource

php artisan migrate
php artisan db:seed
php artisan serve
php artisan optimize 
