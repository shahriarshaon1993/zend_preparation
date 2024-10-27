## Lesson 3.3 → Dependency Injection & DI Containers
## Lesson 3.4 → Dependency Injection Container With & Without Reflection API Auto wiring.

### Dependency Injection:

```text
    In software engineering, dependency injection is a technique in which an object
    receives other object that it depends on, called dependencies. Typically, the 
    receiving object is called a client and the passed-in ('injected') object is called
    a service. The code that passes the service to the client is called the injector.
    Instead of the client specifying which service it will use, the injector tells the
    client what service to use. The 'injection' refers to the passing of a dependency
    (a service) into the client that uses it.
```

```php
// Tight Coupling
// This is harder to maintain

class InvoiceService
{
    protected PaymentGatewayService $gatewayService;
    protected SalesTaxService $salesTaxService;
    protected EmailService $emailService;
    
    public function __construct() 
    {
        $this->gatewayService = new PaymentGatewayService();
        $this->salesTaxService = new SalesTaxService();
        $this->emailService = new EmailService();
    }
}
```

```php
// Constructor injection

class InvoiceService
{
    public function __construct(
        protected SalesTaxService $salesTaxService,
        protected PaymentGatewayService $gatewayService,
        protected EmailService $emailService
    ){}
}
```

### Dependency Injection Container:

```text
    DI container simply put is just a class that has information about other classes which
    enables it to resolve classes whit there dependencies.
```