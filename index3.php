<?php

class  BankAccount
{
    public int $bankAccountNumber;
    public float $bankAccountBalance;
    public function __construct(int $accountNumber, float $initialAccountBalance)
    {
        $this->bankAccountNumber = $accountNumber;
        $this->bankAccountBalance = $initialAccountBalance;
    }

    public function deposit(float $depositAmount): void
    {
        $this->bankAccountBalance += $depositAmount;
    }

    public function withdraw(float $withdrawAmount): void
    {
        $this->bankAccountBalance -= $withdrawAmount;
    }
}

$myBankAccount = new BankAccount(12345, 1000);
echo  "My account balance is ". $myBankAccount->bankAccountBalance;
$myBankAccount->deposit(1000);
echo "<br />";
echo "My account balance after deposit is ". $myBankAccount->bankAccountBalance;
$myBankAccount->withdraw(400);
echo "<br />";
echo "My account balance after withdraw is ". $myBankAccount->bankAccountBalance;
