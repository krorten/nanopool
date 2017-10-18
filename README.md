# Nanopool
Laravel wrapper for Nanopool API

**Nanopool** is a nanopool api wrapper for Laravel 5.5

## Install

    composer require krorten/nanopool

### Post Install
After installing, register the `Krorten\Nanopool\Providers\CryptocompProvider` in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...

    Krorten\Nanopool\Providers\NanopoolProvider::class,
],
```

Also, add the `Nanopool` facade to the `aliases` array in your `app` configuration file:

```php
'Nanopool' => Krorten\Nanopool\Facades\NanopoolFacade::class,    
```

See the [API documentation](https://zec.nanopool.org/api/) for more information about the endpoints and responses. (replace coin with i.e: zec, eth, sia or etc)

### Examples
You need to set the type of coin before you can retreive any info.
```php
//Get user(wallet addr) general summary
Nanopool::setType('zec')->user($wallet_address);
```
```php
//Get list of workers with connected to user(wallet addr)
Nanopool::setType('eth')->workers($wallet_address);

//Other actions to use
->hashrate
->balancehs
->payments
->calculator
```
## License

Nanopool API Wrapper is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)