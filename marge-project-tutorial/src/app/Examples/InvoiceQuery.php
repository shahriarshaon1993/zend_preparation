<?php

namespace App\Examples;

class InvoiceQuery
{
    public function __construct(protected SalesTaxCalculator $salesTaxCalculator){}

    public function create(array $lineItems): void
    {
        // Calculate sub total
        $lineItemsTotal = $this->calculateLineItemsTotal($lineItems);

        // Calculate sales tex
        $salesTax = $this->salesTaxCalculator->calculate($lineItemsTotal);

        $total = $lineItemsTotal + $salesTax;

        echo 'Sub Total: $'. $lineItemsTotal . PHP_EOL;
        echo 'Sales Tax: $'. $salesTax . PHP_EOL;
        echo 'Total: $'. $total . PHP_EOL;
    }

    public function calculateLineItemsTotal(array $items): float|int
    {
        return array_sum(
            array_map(fn($item) => $item['unitPrice'] * $item['quantity'], $items)
        );
    }
}