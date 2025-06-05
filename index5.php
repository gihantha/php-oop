<?php
declare(strict_types = 1);

class Car
{
    public string $brand;

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }
    public function getBrand(): string
    {
        return $this->brand;
    }
}

class BMW extends Car
{
    public function setBrandName(string $brand): void
    {
        $this->setBrand($brand);
    }
}

$bmw = new BMW();
$bmw->setBrand('Honda');
echo $bmw->getBrand();