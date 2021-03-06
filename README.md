# laravel5-angular-adminlte
A MVC skeleton on the arms of Laravel 5 + AngularJS + AngularUI Router + AdminLTE 2

This skeleton use Composer, Laravel 5, AngularJS, AngularUI Router, AdminLTE 2 and jQuery

## Quick start

1 - Clone the repo:

```bash
git clone https://github.com/avlima/laravel5-angular-adminlte.git
```

2 - Change to the directory created

```bash
cd laravel5-angular-adminlte/
```

3 - Download Composer

Run this in your terminal to get the latest Composer version:

```bash
curl -sS https://getcomposer.org/installer | php
```

or if you don't have curl:

```bash
php -r "readfile('https://getcomposer.org/installer');" | php
```

4 - Composer Install

```bash
composer install
```

5 - Installing gulp and laravel-exilir in node_modules directory

```bash
sudo npm install
```

and

```bash
sudo npm install gulp -g
```

6 - Installing bower

Before you begin, make sure you already have the Bower installed, if not, use the npm that comes with nodejs to install this package manager.

```bash
sudo npm install -–global bower
```

7 - Installing all dependencies set in vendor / bower_components.

```bash
bower install
```

If you have connection problems with the installation of the bower, please correct the problem with the command below and try novament.

```bash
git config --global url."https://".insteadOf git://
```

8 - Running the elixir to copy the packages to their respective paths.

```bash
gulp -production
```

9 - Generate key with artisan.


Rename the file .env.axample to .env

```bash
mv .env.axample .env
```

and

```bash
php artisan key:generate
```

10 - Start PHP Built-in web server:

```bash
php -S 127.0.0.1:8000 -t public/
```

or

```bash
php -S 0.0.0.0:8000 -t public/
```

##Copyright and license

Code and documentation copyright (c) 2015, Code released under the New BSD license.
