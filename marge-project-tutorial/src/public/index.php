<?php

declare(strict_types=1);

use App\App;
use App\Config;
use App\Container;
use App\Controllers\GeneratorController;
use App\Controllers\HomeController;
use App\Router;

require __DIR__ . '/../vendor/autoload.php';

//$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
//$dotenv->load();
//
//const STORAGE_PATH = __DIR__ . '/../storage';
//const VIEW_PATH = __DIR__ . '/../views';
//
//$container = new Container();
//$router = new Router($container);
//
//$router
//    ->get('/', [HomeController::class, 'index'])
//    ->get('/generator', [GeneratorController::class, 'index']);
//
//
//(new App(
//    $container,
//    $router,
//    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
//    new Config($_ENV)
//))->run();

// Example 1
//$map = new WeakMap();
//
//$obj = new stdClass();
//
//$store = new WeakMap();
//
//$store[$obj] = 'foobar';
//
//var_dump($store);
//
//unset($obj);
//
//var_dump($store);

// Example 2

interface Event {}

class SomeEvent implements Event {}

class AnotherEvent implements Event {}

class Dispatcher
{
    protected WeakMap $dispatchCount;

    public function __construct()
    {
        $this->dispatchCount = new WeakMap();
    }

    public function dispatch(Event $event): void
    {
        $this->incrementDispatches($event);

        // dispatch the event
    }

    protected function incrementDispatches(Event $event): void
    {
        $this->dispatchCount[$event] ??= 0;
        $this->dispatchCount[$event]++;
    }
}

$dispatcher = new Dispatcher();

$event = new SomeEvent();
$dispatcher->dispatch($event);
$dispatcher->dispatch($event);

$anotherEvent = new AnotherEvent();
$dispatcher->dispatch($anotherEvent);

var_dump($dispatcher);