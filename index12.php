<?php
declare(strict_types=1); // Enforce strict typing

// ---------------------------------------------
// STATIC IN PHP
// ---------------------------------------------

// Static members (properties and methods) belong to the class itself,
// not to an instance (object) of the class.

class Message
{
    // A static property - shared across all uses of the class
    public static $messages = "Hello World!";

    // A static method - can be accessed without creating an instance of the class
    public static function showMessage(string $name): void
    {
        echo "$name created successfully!";
    }
}

// ---------------------------------------------
// CLASS USING STATIC METHOD: User
// ---------------------------------------------
class User
{
    public function createUser()
    {
        // Call the static method using ClassName::methodName()
        Message::showMessage("User");
    }
}

// ---------------------------------------------
// CLASS USING STATIC METHOD: Product
// ---------------------------------------------
class Product
{
    public function createProduct()
    {
        // Again, call the static method directly using the class name
        Message::showMessage("Product");
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
