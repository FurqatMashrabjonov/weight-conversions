# This is my package weight-conversions

[![Latest Version on Packagist](https://img.shields.io/packagist/v/furqat/weight-conversions.svg?style=flat-square)](https://packagist.org/packages/furqat/weight-conversions)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/furqat/weight-conversions/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/furqat/weight-conversions/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/furqat/weight-conversions/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/furqat/weight-conversions/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/furqat/weight-conversions.svg?style=flat-square)](https://packagist.org/packages/furqat/weight-conversions)

## Installation

You can install the package via composer:

```bash
composer require furqat/weight-conversions
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="weight-conversions-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="weight-conversions-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="weight-conversions-views"
```

## Usage

```php
$weightConversions = new Furqat\WeightConversions();
echo $weightConversions->echoPhrase('Hello, Furqat!');
```

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

- [Furqatbek Mashrabjonov](https://github.com/FurqatMashrabjonov)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
