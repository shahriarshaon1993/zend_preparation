<?php

declare(strict_types=1);

use App\App;
use App\Config;
use App\Controllers\CurlController;
use App\Controllers\GeneratorController;
use App\Controllers\HomeController;
use App\Controllers\InvoiceController;
use App\Controllers\UserController;
use App\Router;
use Illuminate\Container\Container;

require __DIR__ . '/../vendor/autoload.php';

const STORAGE_PATH = __DIR__ . '/../storage';
const VIEW_PATH = __DIR__ . '/../views';

$container = new Container();
$router = new Router($container);

try {
    $router->registerRoutesFromControllerAttributes([
        HomeController::class,
        GeneratorController::class,
        InvoiceController::class,
        UserController::class,
        CurlController::class,
    ]);
} catch (ReflectionException $e) {
    echo $e->getMessage();
}

//$router
//    ->get('/', [HomeController::class, 'index'])
//    ->get('/generator', [GeneratorController::class, 'index']);


(new App(
    $container,
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']]
))->boot()->run();