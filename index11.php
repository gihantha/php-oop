<?php
declare(strict_types=1); // Enforce strict typing

// ---------------------------------------------
// TRAITS IN PHP
// ---------------------------------------------

// A trait is a mechanism for code reuse in single inheritance languages like PHP.
// It allows you to define methods in a reusable way, and use them across multiple classes
// without requiring inheritance.

// This trait defines a method that can be shared by any class that "uses" it
trait Message
{
    public function showMessage(string $name): void
    {
        echo "$name created successfully!";
    }
}

// ---------------------------------------------
// CLASS USING TRAIT: User
// ---------------------------------------------
class User
{
    // Using the Message trait to reuse the showMessage method
    use Message;

    public function createUser()
    {
        // Call the method from the trait
        $this->showMessage('User');
    }
}

// ---------------------------------------------
// CLASS USING TRAIT: Product
// ---------------------------------------------
class Product
{
    // Again, using the same Message trait
    use Message;

    public function createProduct()
    {
        // Reusing the same method from the trait
        $this->showMessage('Product');
    }
}

// ---------------------------------------------
// USAGE EXAMPLES
// ---------------------------------------------

$user = new User();
$user->createUser(); // Output: User created successfully!

echo "<br />";

$product = new Product();
$product->createProduct(); // Output: Product created successfully!

echo "<br />";
