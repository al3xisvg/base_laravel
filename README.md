<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### Init

-   [x] Install dependencies

```
>> composer install
```

-   [x] Run Project

```
>> php artisan serve --host 0.0.0.0 --port 8000
```

### Notes

-   [x] Jquery was installed manually

```
Adding in package.json:
  >> yarn add jquery

In resources/js/bootstrap.js, at bottom file was inserted following text:

  try {
    window.$ = window.jQuery = require('jquery');

    require('./bootstrap');
  } catch (e) {

  }
```
