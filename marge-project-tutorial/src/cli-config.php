<?php

require 'vendor/autoload.php';

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager;
use Doctrine\Migrations\DependencyFactory;
use Doctrine\Migrations\Configuration\Migration\PhpFile;
use Doctrine\DBAL\DriverManager;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$migrationConfig = new PhpFile('migrations.php'); // Or use one of the Doctrine\Migrations\Configuration\Configuration\* loaders

$params = [
    'dbname'   => $_ENV['DB_DATABASE'],
    'user'     => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS'],
    'host'     => $_ENV['DB_HOST'],
    'driver'   => $_ENV['DB_DRIVER'] ?? 'pdo_mysql',
];

$config = ORMSetup::createAttributeMetadataConfiguration([__DIR__ . '/app/Entity']);

$connection = DriverManager::getConnection($params);

$entityManager = new EntityManager($connection, $config);

return DependencyFactory::fromEntityManager($migrationConfig, new ExistingEntityManager($entityManager));