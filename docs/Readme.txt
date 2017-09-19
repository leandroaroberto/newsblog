By Leandro A Roberto

Welcome to Cross Over News! In order to start the application you need to follow the steps below:

Pre-requisites

    PHP >= 5.6.3
        php5.6-curl
        php5.6-mbstring
        php5.6-json
        php5.6-mysql (PDO driver to MySQL)
        php5.6-xml
        php5.6-zip

    MySQL >= 5.7
    Laravel 5.4.x
    Debian like Linux System

Installation

    - Unzip the file Leandro_A_Roberto - Software Engineer - PHP.zip into your apache htdocs directory
    - Creating the MySQL database and set the credentials into config/database.php like below:

    'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'databasename'),
            'username' => env('DB_USERNAME', 'username'),
            'password' => env('DB_PASSWORD', 'password'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],

    - Run composer to check and treat dependencies:
    
        composer install

     - Create the application keys:

        php artisan key:generate

    - Run the php artisan command line to create the database structure and seed it:

        php artisan migrate

        php artisan db:seed


Testing

    Change the env to testing in config/app.php:

    'env' => env('APP_ENV', 'testing'),
    
    
    Perform tests using dusk:
    
    php artisan dusk
     

    Tests available in tests/Browser directory:
              
        - HomePageTest


Features

        Auto-summary
        
        You do not need to write the summary (you can do if wish, no problem!), the application will generate it automatically based on
the news full text.

        Prepared to future trash implementation
        
        In this software were implemented SoftDeletes in order to prevent erase mistakes. The program set the deleted_at value in database
and it can be restored in the future just cleaning this field.


