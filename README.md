### Setting up the Application

* First is to set up the environment, create a copy of .env.example in the root directory. 
    Then rename the file to .env. That is all the configuration needed on the .env for now
* Set up application key for security purpose using `php artisan key:generate`
* If everything goes well with no trouble, run the web app using `php artisan serve`
* (<b>Optional</b>) If there is any problem, try to run `composer install` and `composer update`
