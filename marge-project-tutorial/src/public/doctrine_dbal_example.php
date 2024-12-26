<?php

declare(strict_types=1);

use App\Entity\Invoice;
use App\Enums\InvoiceStatus;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Dotenv\Dotenv;

require_once __DIR__ . "/../vendor/autoload.php";

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$params = [
    'dbname'   => $_ENV['DB_DATABASE'],
    'user'     => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS'],
    'host'     => $_ENV['DB_HOST'],
    'driver'   => $_ENV['DB_DRIVER'] ?? 'pdo_mysql',
];

$config = ORMSetup::createAttributeMetadataConfiguration([__DIR__ . '/Entity']);

$connection = DriverManager::getConnection($params);

$entityManager = new EntityManager($connection, $config);

$queryBuilder = $entityManager->createQueryBuilder();

// WHERE amount > :amount AND (status = :status OR created_at >= :date)
$query = $queryBuilder
//    ->select('i.createdAt', 'i.amount')
    ->select('i', 'it')
    ->from(Invoice::class, 'i')
    ->join('i.items', 'it')
//    ->where('i.amount > :amount')
    ->where(
        $queryBuilder->expr()->andX(
            $queryBuilder->expr()->gt('i.amount', ':amount'),
            $queryBuilder->expr()->orX(
                $queryBuilder->expr()->eq('i.status', ':status'),
                $queryBuilder->expr()->gte('i.createdAt', ':date'),
            )
        )
    )
    ->setParameter('amount', 100)
    ->setParameter('status', InvoiceStatus::Paid->value)
    ->setParameter('date', '2024-12-24 00:00:00')
    ->orderBy('i.createdAt', 'desc')
    ->getQuery();

//var_dump($query->getArrayResult());
//exit;

$invoices = $query->getResult();

/** @var Invoice $invoice */
foreach ($invoices as $invoice) {
    echo $invoice->getCreatedAt()->format('m/d/Y g:ia')
        . ', ' . $invoice->getAmount()
        . ', ' . $invoice->getStatus()->toString() . PHP_EOL;

    foreach ($invoice->getItems() as $item) {
        echo ' - ' . $item->getDescription()
            . ', ' . $item->getQuantity()
            . ', ' . $item->getUnitPrice() . PHP_EOL;
    }
}