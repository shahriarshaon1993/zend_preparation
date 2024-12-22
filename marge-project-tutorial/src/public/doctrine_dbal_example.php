<?php

declare(strict_types=1);

use Doctrine\DBAL\ArrayParameterType;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Schema\Column;
use Dotenv\Dotenv;

require_once __DIR__ . "/../vendor/autoload.php";

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$connectionParams = [
    'dbname' => $_ENV['DB_DATABASE'],
    'user' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS'],
    'host' => $_ENV['DB_HOST'],
    'driver' => $_ENV['DB_DRIVER'] ?? 'pdo_mysql',
];

$conn = DriverManager::getConnection($connectionParams);

/** Example 1 */
//$stmt = $conn->prepare('SELECT * FROM invoices');
//
//$result = $stmt->executeQuery();
//
//var_dump($result->fetchAllAssociative());

/** Example 2 */
//$stmt = $conn->prepare('SELECT * FROM invoices WHERE id = :id');
//$stmt->bindValue(':id', 10);
//
//$result = $stmt->executeQuery();
//
//var_dump($result->fetchAssociative());

/** Example 3 */
//$stmt = $conn->prepare('SELECT id, created_at FROM invoices WHERE created_at BETWEEN :from AND :to');
//
//$from = new DateTime('12/10/2024 00:00:00');
//$to = new DateTime('12/22/2024 07:50:49');
//
//$stmt->bindValue(':from', $from, 'datetime');
//$stmt->bindValue(':to', $to, 'datetime');

//$result = $stmt->executeQuery();
//
//var_dump($result->fetchAllAssociative());

/** Example 4 */
//$ids = [1, 2, 3];
//$results = $conn->executeQuery("SELECT id, created_at FROM invoices WHERE id IN (?)", [$ids], [ArrayParameterType::INTEGER]);

//var_dump($results->fetchAllAssociative());

/** Example 5 */
//$conn->transactional(function ($conn) {
//
//});

/** Example 6 | Connection with builder */
$conn2 = DriverManager::getConnection($connectionParams);

$builder = $conn->createQueryBuilder();

/** Example 7 */
//$invoices = $builder->select('id', 'amount')
//    ->from('invoices')
//    ->where('amount > ?')
//    ->setParameter(0, 4500)
//    ->fetchAllAssociative();
//
//var_dump($invoices);

/** Example 8 */
//$schema = $conn2->createSchemaManager();

//var_dump($schema->listTableNames());
//var_dump(
//    array_map(fn(Column $column) => $column->getName(), $schema->listTableColumns('invoices'))
//);

//var_dump(
//    array_keys($schema->listTableColumns('invoices'))
//);