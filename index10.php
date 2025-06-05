<?php
declare(strict_types=1); // Enforce strict type declarations for better code safety

// ---------------------------------------------
// POLYMORPHISM EXAMPLE IN PHP
// ---------------------------------------------

// Polymorphism allows objects of different classes to be treated through the same interface.
// This makes the code more flexible, maintainable, and adheres to the Open/Closed Principle
// (Open for extension, closed for modification).

// Define a common interface (contract) for different payment methods
interface PaymentMethod
{
    // Each class that implements this interface must define this method
    public function processPayment(float $amount);
}

// ---------------------------------------------
// CARD PAYMENT CLASS
// ---------------------------------------------
class CardPayment implements PaymentMethod
{
    // Specific implementation for processing payment via card
    public function processPayment(float $amount): void
    {
        echo "Process Payment using customer card. " . $amount;
    }
}

// ---------------------------------------------
// CASH PAYMENT CLASS
// ---------------------------------------------
class CashPayment implements PaymentMethod
{
    // Specific implementation for processing payment via cash
    public function processPayment(float $amount): void
    {
        echo "Process Payment using customer cash. " . $amount;
    }
}

// ---------------------------------------------
// POLYMORPHIC USAGE
// ---------------------------------------------

// Even though $cardPayment and $cashPayment are different classes,
// they share a common interface and can be used interchangeably.

$cardPayment = new CardPayment();
$cardPayment->processPayment(1890); // Output: Process Payment using customer card. 1890

echo "<br />";

$cashPayment = new CashPayment();
$cashPayment->processPayment(2023); // Output: Process Payment using customer cash. 2023

echo "<br />";
