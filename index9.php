<?php
declare(strict_types=1); // Enforces strict type checking (no implicit type coercion)

// ---------------------
// INTERFACE DEFINITION
// ---------------------

// An interface defines a contract that any implementing class must follow.
// Interfaces can only declare method signatures, not implement method bodies.
interface AnimalInterface
{
    // ❌ You cannot declare properties in an interface.
    // public string $name = '';

    // ❌ You cannot use access modifiers (public/private/protected) in interface methods.
    // private function makeSound();

    // ❌ You cannot define method bodies in interfaces.
    // public function makeSound() {
    //     return "some sound";
    // }

    // ✅ You must only declare the method signature.
    public function makeSound(): string;
}

// ---------------------
// IMPLEMENTATION OF INTERFACE
// ---------------------

// A class implements an interface using the `implements` keyword (not `extends`).
// This means the class must define all the methods declared in the interface.
class Dog implements AnimalInterface
{
    // Must implement the makeSound method as required by AnimalInterface.
    public function makeSound(): string
    {
        return "Dog is barking";
    }
}

// Create an instance of the Dog class.
$myAnimal = new Dog();

// Output: Dog is barking
echo $myAnimal->makeSound();


// --------------------------------------------
// ANOTHER INTERFACE & MULTIPLE IMPLEMENTATIONS
// --------------------------------------------

interface BankAccount
{
    // Contract for generating interest – different account types will define this differently.
    public function generateInterest(): string;
}

// SavingsAccount implements BankAccount and provides its own version of generateInterest.
class SavingsAccount implements BankAccount
{
    public function generateInterest(): string
    {
        return "Generate interest MONTHLY";
    }
}

// FixedAccount also implements BankAccount but behaves differently.
class FixedAccount implements BankAccount
{
    public function generateInterest(): string
    {
        return "Fixed interest YEARLY";
    }
}
