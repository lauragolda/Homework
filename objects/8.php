<?php

class SavingsAccount{
    private float $balance;
    private float $annualRate;

    function __construct(float $balance, float $annualRate) {
        $this->balance= $balance;
        $this->annualRate = $annualRate;
    }

    public function getAmount(): float {
        return $this->balance;
    }

    public function withdraw(float $withdrawnAmount): void {
        if($this->balance - $withdrawnAmount >= 0){
            $this->balance -= $withdrawnAmount;
        } else throw new Error('Insufficient funds.');
    }

    public function deposit(float $depositedAmount): void {
        $this->balance += $depositedAmount;
    }

    public function addInterest(): void {
        $this->balance += $this->balance * $this->annualRate / 12;
    }
}


//Nevarēju tikt galā ar pārejo uzdevuma daļu.
