# Laravel Healthz

[![Latest Version on Packagist](https://img.shields.io/packagist/v/optimistdigital/laravel-healthz.svg?style=flat-square)](https://packagist.org/packages/optimistdigital/laravel-healthz)
[![Total Downloads](https://img.shields.io/packagist/dt/optimistdigital/laravel-healthz.svg?style=flat-square)](https://packagist.org/packages/optimistdigital/laravel-healthz)

Healthz is a Composer package that adds a health check route to the [Laravel](https://laravel.com) application.

Creates a route with path `/healthz` that response with 200 status code.

## Usage

In `routes/web.php` add a line:

```
Healthz::endpoint();
```

## Installation

Install the package in a Laravel project via Composer:

```
composer require optimistdigital/laravel-healthz
```

## Credits

- [Allan Tatter](https://github.com/allantatter)

## License

Laravel Healthz is open-sourced software licensed under the [MIT license](LICENSE.md).
