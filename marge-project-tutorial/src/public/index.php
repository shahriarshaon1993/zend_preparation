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
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Twig\Extra\Intl\IntlExtension;

require __DIR__ . '/../vendor/autoload.php';

const STORAGE_PATH = __DIR__ . '/../storage';
const VIEW_PATH = __DIR__ . '/../views';

//$container = new Container();
//$router = new Router($container);
//
//try {
//    $router->registerRoutesFromControllerAttributes([
//        HomeController::class,
//        GeneratorController::class,
//        InvoiceController::class,
//        UserController::class,
//        CurlController::class,
//    ]);
//} catch (ReflectionException $e) {
//    echo $e->getMessage();
//}

//$router
//    ->get('/', [HomeController::class, 'index'])
//    ->get('/generator', [GeneratorController::class, 'index']);


//(new App(
//    $container,
//    $router,
//    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']]
//))->boot()->run();

$app = AppFactory::create();

//$app->get('/', function (Request $request, Response $response, $args) {
//    $view = Twig::fromRequest($request);
//
//    return $view->render($response, 'index.twig');
//});

$app->get('/', [HomeController::class, 'index']);
$app->get('/invoices', [InvoiceController::class, 'index']);

// Create Twig

$twig = Twig::create(VIEW_PATH, [
    'cache' => STORAGE_PATH.'/cache',
    'auto_reload' => true,
]);

$twig->addExtension(new IntlExtension());

// Add Twig-View Middleware
$app->add(TwigMiddleware::create($app, $twig));

$app->run();