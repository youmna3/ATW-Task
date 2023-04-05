# ATW-Task

- Pull Laravel/php project from git provider.
- Rename `.env.example` file to .envinside your project root and fill the database information. (windows wont let you do it, so you have to - open your console cd your project root directory and `run mv .env.example` .env )
- Open the console and cd your project root directory
- Run `composer install`
- Run `php artisan migrate`
- Run `php artisan db:seed` to run seeders/
- Run `php artisan serve`
