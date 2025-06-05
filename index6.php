<?php
declare(strict_types=1); // Enforce strict type checking for better reliability and type safety

// ---------------------------------------------
// PARENT CLASS
// ---------------------------------------------
class MyParent
{
    // A protected property is accessible within this class and its subclasses
    protected string $parentName = 'I am a parent';

    // A protected method can also be accessed from subclasses
    protected function sayHello(): string
    {
        return "Hello Hello";
    }

    // A private property is accessible **only within this class**
    private string $lionName = 'I am a lion';

    // This public method provides **indirect access** to the private property $lionName
    public function sayRoar(): string
    {
        // Allowed: accessing private property from inside the same class
        return $this->lionName;
    }
}

// ---------------------------------------------
// CHILD CLASS - Inherits from MyParent
// ---------------------------------------------
class Child extends MyParent
{
    public function getParentName(): string
    {
        // ✅ Allowed: $parentName is protected, so accessible in child class
        return $this->parentName;

        // ❌ NOT ALLOWED: $lionName is private in parent, can't access directly
        // return $this->lionName;

        // ❌ NOT ALLOWED: sayHello() is protected, can't call from outside unless exposed via public method
        // return $this->sayHello();
    }
}

// ---------------------------------------------
// USAGE
// ---------------------------------------------

// Create a Child object and access the inherited protected property via a public method
//$child = new Child();
//echo $child->getParentName(); // Output: I am a parent

// Access private property indirectly using public method from the same class
echo (new MyParent())->sayRoar(); // Output: I am a lion
