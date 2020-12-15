# A package to kickstart your Laravel Livewire forms

<!-- [![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/FormComonentsLivewire.svg?style=flat-square)](https://packagist.org/packages/spatie/FormComonentsLivewire)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/spatie/FormComonentsLivewire/run-tests?label=tests)](https://github.com/spatie/FormComonentsLivewire/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/FormComonentsLivewire.svg?style=flat-square)](https://packagist.org/packages/spatie/FormComonentsLivewire) -->


The package provides you with a small set of frequently used laravel form components. We're using them to create livewire driven applications.

## Installation

You can install the package via composer:

```bash
composer require black-forest-digital/form-components-livewire
```
<!--
You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Bfd\FormComonentLivewire\FormComonentLivewireServiceProvider" --tag="migrations"
php artisan migrate
``` 
-->

Publish the views to use and customize them:
```bash
php artisan vendor:publish --provider="Bfd\FormComonentLivewire\FormComonentLivewireServiceProvider" --tag="views"
```

<!--
You can publish the config file (not required) with:
```bash
php artisan vendor:publish --provider="Bfd\FormComonentLivewire\FormComonentLivewireServiceProvider" --tag="config"
```
-->
<!-- This is the contents of the published config file:

```php
return [
];
```
-->

## Usage

wip
<!--
``` php
$FormComonentsLivewire = new Bfd\FormComonentLivewire();
echo $FormComonentsLivewire->echoPhrase('Hello, Bfd!');
```

## Testing

``` bash
composer test
```
-->

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email mail@black-forest-digital.de instead of using the issue tracker.

## Credits

- [Philipp Kreis](https://github.com/black-forest-digital)
- [Laravel Jetstream as an inspiration](https://jetstream.laravel.com/1.x/introduction.html)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
