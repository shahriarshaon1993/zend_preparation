<?php

declare(strict_types=1);

use App\Config;
use App\Controllers\HomeController;
use App\Controllers\InvoiceController;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Dotenv\Dotenv;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Twig\Extra\Intl\IntlExtension;
use DI\Container;
use function DI\create;

require __DIR__.'/../vendor/autoload.php';

const STORAGE_PATH = __DIR__.'/../storage';
const VIEW_PATH = __DIR__.'/../views';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

// Create Container using PHP-DI
$container = new Container();

$container->set(Config::class, create(Config::class)->constructor($_ENV));
$container->set(EntityManager::class, function (Config $config) {
    // Path to your entity classes
    $paths = [__DIR__.'/../app/Entity'];

    // Create ORM configuration
    $ormSetup = ORMSetup::createAttributeMetadataConfiguration($paths);

    // Create a connection configuration
    $connection = DriverManager::getConnection($config->db, $ormSetup);

    // Create the EntityManager
    return new EntityManager($connection, $ormSetup);
});

// Set container to create App with on AppFactory
AppFactory::setContainer($container);
$app = AppFactory::create();

$app->get('/', [HomeController::class, 'index']);
$app->get('/invoices', [InvoiceController::class, 'index']);

$twig = Twig::create(VIEW_PATH, [
    'cache' => STORAGE_PATH.'/cache',
    'auto_reload' => true,
]);

$twig->addExtension(new IntlExtension());

// Add Twig-View Middleware
$app->add(TwigMiddleware::create($app, $twig));

$app->run();