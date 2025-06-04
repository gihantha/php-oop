<?php

class Car
{
    // Properties (attributes)
    public string $carColor = 'white';
    public string $carModel = 'corolla';
    public int $carManufactureYear = 1978;

    //Methods according to functional paradigm as function
    public function startCar(): void
    {
        echo "Cra Starting";
    }

    public function driveCar(): void
    {
        echo "Drive Starting";
    }
}

//Instance / Object

$toyotaCorolla = new Car();
$toyotaCorolla->startCar();
echo $toyotaCorolla->carColor;