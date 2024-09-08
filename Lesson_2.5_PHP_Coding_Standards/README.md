## Lesson 2.5 - PHP Coding Standards, Auto-loading (PSR-4) & Composer

### My first custom autoloader function 

```php
use App\PaymentGateway\Paddle\Transaction;

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';

    if (file_exists($path)) {
        require $path;
    }
});

$paddleTransaction = new Transaction();

var_dump($paddleTransaction);
```

### What is composer?

> Composer is tools for dependency management in php.

```php
// install composer in docker
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
```

> Run this: docker-compose up -d --build

> Run this: docker exec -it [container name] bash

### Composer require and require-dev

> The main difference between require and require-dev is that require lists the dependencies
> for your project they need to be installed in production while require-dev lists the packages
> that are needed for development.

> require-dev is that the dependencies from require-dev will not be installed if you package
> is being installed as a dependency for something else.

> `composer dump-autoload -o` this should generate optimized autoload. It says that it
> optimize autoload files that contains [154] classes if we open the autoload class map
> now we see that this array was populated with all the classes that our application
> needs. NOTE: It is not that ideal for development right you don't want to be running
> this command every time do that's why using `composer dump-autoload` for development is
> just fine but for production you might want to use the `composer dump-autoload -o` so that's
> a bit faster.