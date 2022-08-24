
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Laravel Developer Dashboard

[![Latest Version on Packagist](https://img.shields.io/packagist/v/remeritus/laravel-developer-dashboard.svg?style=flat-square)](https://packagist.org/packages/remeritus/laravel-developer-dashboard)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/remeritus/laravel-developer-dashboard/run-tests?label=tests)](https://github.com/remeritus/laravel-developer-dashboard/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/remeritus/laravel-developer-dashboard/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/remeritus/laravel-developer-dashboard/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/remeritus/laravel-developer-dashboard.svg?style=flat-square)](https://packagist.org/packages/remeritus/laravel-developer-dashboard)

Package for Laravel Developers to monitor their existing Laravel Applications.

## Installation

You can install the package via composer:

```bash
composer require remeritus/laravel-developer-dashboard
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="developer-dashboard-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="developer-dashboard-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-developer-dashboard-views"
```

## Usage

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Richard Sihm](https://github.com/remeritus)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
