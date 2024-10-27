<?php

namespace App;

use App\Exceptions\RouteNotFoundException;
use App\Services\EmailService;
use App\Services\GatewayService;
use App\Services\InvoiceService;
use App\Services\SalesTaxService;

class App
{
    private static DB $db;
    public static Container $container;

    public function __construct(protected Router $router, protected array $request, protected Config $config)
    {
        static::$db = new DB($config->db ?? []);
        static::$container = new Container();

        static::$container->set(
            InvoiceService::class,
            function (Container $c) {
                return new InvoiceService(
                    $c->get(SalesTaxService::class),
                    $c->get(GatewayService::class),
                    $c->get(EmailService::class)
                );
            }
        );

        static::$container->set(SalesTaxService::class, fn() => new SalesTaxService());
        static::$container->set(GatewayService::class, fn() => new GatewayService());
        static::$container->set(EmailService::class, fn() => new EmailService());
    }

    public static function db(): DB
    {
        return static::$db;
    }

    public function run(): void
    {
        try {
            echo $this->router->resolve($this->request['uri'], strtolower($this->request['method']));
        } catch (RouteNotFoundException) {
            http_response_code(404);

            echo View::make('errors/404');
        }
    }
}