<?php

class Product {
    private string $name;
    private float $price;
    private int $amount;

    function __construct(string $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function printProduct(): string{
        return $this -> name ." " . $this -> price . 'EUR ' . $this->amount . " units". PHP_EOL;
    }

    public function changePrice(float $newPrice){
        return $this->price = $newPrice;
    }

    public function changeAmount(int $newAmount){
        return $this->amount = $newAmount;
    }
}

$mouse = new Product ("Logitech mouse", 70.00, 14);
$phone = new Product("IPhone 5s", 999.99, 3);
$epson = new Product("Epson EB-U05", 440.46, 1);

echo $mouse ->printProduct();
echo $phone ->printProduct();
echo $epson ->printProduct();

$mouse->changeAmount(6);
echo $mouse ->printProduct();
$phone->changePrice(899.89);
echo $phone ->printProduct();
