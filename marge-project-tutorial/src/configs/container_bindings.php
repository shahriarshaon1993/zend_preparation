<?php

declare(strict_types=1);

use App\Config;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Psr\Container\ContainerInterface;
use Slim\Views\Twig;
use Twig\Extra\Intl\IntlExtension;
use function DI\create;

return [
    Config::class => create(Config::class)->constructor($_ENV),
    EntityManager::class => function (Config $config) {
        $paths = [__DIR__.'/../app/Entity'];
        $ormSetup = ORMSetup::createAttributeMetadataConfiguration($paths);
        $connection = DriverManager::getConnection($config->db, $ormSetup);

        return new EntityManager($connection, $ormSetup);
    },
    Twig::class => function (Config $config) {
        $twig = Twig::create(VIEW_PATH, [
            'cache' => STORAGE_PATH.'/cache',
            'auto_reload' => $config->environment === 'development',
        ]);

        $twig->addExtension(new IntlExtension());

        return $twig;
    },
];