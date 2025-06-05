<?php
declare(strict_types=1);

// Demonstration of the __invoke() magic method in PHP

// The Message class
class Message
{
    // The __invoke() method allows an object to be called as a function.
    // This means you can use an instance of Message like a function.
    public function __invoke(string $name): string
    {
        return "$name created successfully!";
    }
}

class User
{
    // The createUser method accepts a Message object
    // and then uses it like a function due to __invoke.
    public function createUser(Message $message): void
    {
        // This will internally call $message->__invoke('User')
        echo $message('User');
    }
}

class Product
{
    // This static method needs to be added to call Message for Product
    public static function showMessage(string $name): void
    {
        // Create an instance of Message and use it like a function
        $message = new Message();
        echo $message($name);
    }

    // This method triggers the static showMessage method
    public function createProduct(): void
    {
        self::showMessage("Product");
    }
}

// Creating a new User object and calling createUser
$user = new User();
$user->createUser(new Message()); // Pass an instance of Message
echo "<br />";

// Creating a new Product object and calling createProduct
$product = new Product();
$product->createProduct();
echo "<br />";
