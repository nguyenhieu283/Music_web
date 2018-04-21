# Music_web
BTL
1. Embeded php code in file .html
1.1. move to root directory of apache server: 
  cd /opt/lampp/etc/httpd.conf
1.2. Add to the end of file the following line to apache server process .html as .php:
  AddType application/x-httpd-php .htm .html
1.3: restart apache server: 
  sudo service apache2 restart

2. The Laravel framework has a few system requirements:

    PHP >= 5.4
    MCrypt PHP Extension

2.1. Install php
2.2. Install composer:
	curl -sS https://getcomposer.org/installer | php
2.3. Set composer as global:
	sudo cp composer.phar /user/local/bin/composer
2.4. Create project use laravel framework
	composer create-project laravel laravel/laravel --prefer-dist 

Note: 
	- With of PHP 7.1, some OS distributions may require you to manually install the PHP JSON extension. When using Ubuntu, this can be done via apt-get install php7.1-json.
	- Since php 5.4 or higher, we don't need xampp or wampp server. Use the following command to start development server:
		php artisan serve

3. Config
	- Add app/Http/Controller directory to the classmap in composer.json 

4. The router allows you to register routes that respond to any HTTP verb. So should config all routes in routes/web.php
	Systax: Route::request($uri, $callback);
	Ex: Route::get('/', function(){return view('home');});

5. To use xampp mysql database with lavarel, run cmd:
	php artisan migrate

6. Note: DO NOT push your .env file to github. Just push .env.example

7. To create flashed session use the following statement:
	redirect('$route') -> with('$session_name', 'return_value');

8. Create master page:
	- Create masterpage.blade.php containt @yield('name') to present html code
	- Create another page which you want to extends masterpage.
	+ use @extends('masterpage')
	+ create html code for your page inside @section('name') and @endsection

9. storage/app: containt local file
   storage/app/public: contain public file that can be access from the web

10. Default directory for files in local: storage/app

11. Use the following command to response download file:
    response()->download('file_path');
    
12. Create model classes to contain and define database relationship by following command:
    php artisan make:model Model

13. Load data from csv file into database:
    load data INFILE 'filename.csv' into TABLE tablename
    FIELDS TERMINATED by ';'
    ENCLOSED by '"' lines TERMINATED by '\n'

    