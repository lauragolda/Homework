<?php

class SavingsAccount
{
    private float $balance;
    private float $annualInterest;

    public function __construct(float $startingBalance)
    {
        $this->balance = $startingBalance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function withdraw(float $withdrawAmount): void
    {
        if ($withdrawAmount > 0) {
            $this->balance -= $withdrawAmount;
        }
    }

    public function deposit(float $depositAmount): void
    {
        if ($depositAmount > 0) {
            $this->balance += $depositAmount;
        }
    }

    public function setInterest(float $newInterest): void
    {
        if ($newInterest > 0) {
            $this->annualInterest = $newInterest;
        }
    }

    public function addInterest(): void
    {
        if (isset($this->annualInterest)) {
            $this->balance += $this->balance * $this->annualInterest / 12;
        }
    }

    public function getInterestEarned(): float
    {
        if (isset($this->annualInterest)) {
            return $this->balance - $this->balance / (1 + $this->annualInterest / 12);
        }
        return 0;
    }
}

//Nevarēju tikt galā ar pārejo uzdevuma daļu, izmēģināju dažādus variantus, bet īsti līdz galam nestrādāja.