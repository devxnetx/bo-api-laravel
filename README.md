# PHP package for burzi-obiavi.com API

[burzi-obiavi.com JSON API documentation](https://documenter.getpostman.com/view/17578164/2s9Y5SW5Us#cde58389-c1f6-484a-b156-a08fd7c6a752)

## Installation

You can install this package via composer

```bash
composer require devxnetx/bo-api-laravel
```

## Config

Put your burzi-obiavi.com profile credentials in `config/burziobiavi.php`. There are no API keys or such

```php
 [
    'username' => 'YOUR USERNAME',
    'password' => 'YOUR PASSWORD',
    //  You can use it for fallback - Sofia (727011)
    'city' => 727011
];
```

### Get cities

```php
    BurziObiavi::getCities();
```

### Get categories

```php
    BurziObiavi::getCategories();
```

### Post ad

api_custom_id - Put your product id here, if we match already existing product ids, the AD data will be updated, else we
create the product.

```php
    BurziObiavi::postAd([
        "title"         => "Your Ad Title - Не приема HTML",
        "content"       => "<b>DESCRIPTION</b>",
        "price"         => "100",
        "phone"         => "0888888888",
        "city"          => 727011,
        "catid"         => 11,
        "subcatid"      => 181,
        "api_custom_id" => "ID from your system",
        "images"        => ["https://cdn.shopify.com/s/files/1/2394/4001/files/21_MAYO_e83d41cd-e674-4508-8d9a-267075361e02_480x480.jpg"]
    ]);
```