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
	
