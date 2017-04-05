# multicraft-api

This package is based on the [mcprohosting/multicraft-api](https://github.com/MCProHosting/multicraft-api) package.

This repo is a simple Composer package for the Multicraft API (as there was not one already). Included in this package are a service provider (with a config file) and facade for the Laravel framework (but you are free to simply ignore them if you're not wanting to use Laravel) as well as the Multicraft API class.

The Multicraft API class was originally written by and is copyright 2010-2012 by xhost.ch GmbH. Some changes have been made by MCProHosting, and those changes are noted within the file itself.

Currently this package only supports the legacy Multicrat API.

## Laravel

In your `config/app.php` add the following provider:
```
Demindo\MulticraftApi\MulticraftApiServiceProvider::class
```
And in the aliasses add this:
```
'Multicraft' => Demindo\MulticraftApi\Multicraft::class,
```
Run `php artisan vendor:publish --provider="Demindo\MulticraftApi\MulticraftApiServiceProvider"` to generate a `config/multicraft.php` configuration file.