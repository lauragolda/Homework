<?php

class BankAccount{
    public string $name;
    public float $balance;

    function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance=$balance;
    }

    function showUserNameAndBalance(): string {

        return $this->name . ", $" . $this->balance . PHP_EOL;
    }

}

$person= new BankAccount("Benson", 17.50);
echo $person->showUserNameAndBalance();