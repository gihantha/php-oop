<?php
declare(strict_types = 1); // Enforce strict typing

// Abstract class: Cannot be instantiated directly.
// It provides a common blueprint for all its child classes.
abstract class Animal
{
    // Concrete method: Fully defined and available to all subclasses.
    public function walk(): string
    {
        return "Can walk";
    }

    // Abstract method: Declared but not defined.
    // All subclasses are REQUIRED to implement this method.
    abstract public function makeSound();
}

// Concrete class Dog that extends abstract class Animal
class Dog extends Animal
{
    // Implementing the abstract method makeSound()
    public function makeSound()
    {
        return "Dog is barking";
    }
}

// Another concrete class Cat that also extends Animal
class Cat extends Animal
{
    // Implementing the abstract method makeSound()
    public function makeSound()
    {
        return "Cat is meowing";
    }
}

// Now, we create an object of Dog and call its methods.
$myDog = new Dog();
echo $myDog->makeSound(); // Outputs: Dog is barking
echo "<br />";
echo $myDog->walk();      // Outputs: Can walk (inherited concrete method)

echo "<br /><br />";

// Same with Cat object
$myCat = new Cat();
echo $myCat->makeSound(); // Outputs: Cat is meowing
echo "<br />";
echo $myCat->walk();      // Outputs: Can walk
