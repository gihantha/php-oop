<?php
declare(strict_types=1); // Enforces strict type checking in function calls

// Encapsulation in OOP (Object-Oriented Programming) is the concept of hiding the internal state and requiring all interaction to be performed through an object's methods.
// This prevents external code from directly accessing or modifying object data, thus maintaining control over it.

class BankAccount
{
    // These properties are marked as "private" so they can't be accessed directly from outside the class.
    // This is the core idea of encapsulation: keeping data safe from outside interference.
    private int $accountNumber;
    private float $accountBalance;

    // Constructor to initialize the object with an account number and starting balance.
    public function __construct(int $accountNumber, float $initialValue)
    {
        $this->accountNumber = $accountNumber;
        $this->accountBalance = $initialValue;
    }

    // Public method to deposit money.
    // External code must use this method to add money to the account, enforcing validation.
    public function deposit(float $depositAmount): void
    {
        if ($depositAmount > 0) {
            $this->accountBalance += $depositAmount;
        } else {
            echo "Deposit amount cannot be zero";
        }
    }

    // Public method to withdraw money.
    // Ensures that the account doesn't go below zero and enforces logical business rules.
    public function withdraw(float $withdrawAmount): void
    {
        if ($withdrawAmount > 0 && $this->accountBalance >= $withdrawAmount) {
            $this->accountBalance -= $withdrawAmount;
        } else {
            echo "Withdraw amount cannot be zero or exceeds balance";
        }
    }

    // Public getter method to access the private account balance.
    // This is the only way to view the balance, preserving data protection.
    public function getAccountBalance(): float
    {
        return $this->accountBalance;
    }
}

// Example usage:

// Creating a BankAccount object with account number and initial balance
$myAccount = new BankAccount(123456, 1300);

// Accessing balance through public method (you cannot access $accountBalance directly)
echo "Your initial account balance is: " . $myAccount->getAccountBalance();
echo "<br />";

// Depositing money using the deposit method
$myAccount->deposit(4000);
echo "Your account balance after deposit is: " . $myAccount->getAccountBalance();
echo "<br />";

// Withdrawing money using the withdraw method
$myAccount->withdraw(2100);
echo "Your account balance after withdraw is: " . $myAccount->getAccountBalance();
echo "<br />";
