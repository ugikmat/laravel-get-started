# laravel-get-started
## How To Import
### 1. Clone Project
If you have git installed you can use command 'git clone https://github.com/ugikmat/laravel-get-started.git', or yout can just download and extract it.
### 2. composer install
use your cli to install component with command 'composer install' on project directory
### 3. copy .env
Add your .env file, you can copy from your other laravel project or you can just copy and rename .env.example.
Don't forget to modify database configuration(DB_DATABASE, DB_USERNAME, DB_PASSWORD). if you don't have a database you can create a new one.
By default, the username is root and you can leave the password field empty. (This is for Xampp) 
By default, the username is root and password is also root. (This is for Lamp)
### 4. generate a key
Run 'php artisan key:generate'
### 5. Migrate database
Run 'php artisan migrate'
if there are error message like '[Illuminate\Database\QueryException] SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes (SQL: alter table users add unique users_email_unique(email))'. 
open AppServiceProvider.php in app/Providers/ and add this:

use Illuminate\Support\Facades\Schema;

public function boot()
{
    Schema::defaultStringLength(191);
}

## Serve your project
After you follow instruction above, you can start your laravel app with command 'php artisan serve'
