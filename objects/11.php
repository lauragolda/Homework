<?php

class Account{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name=$name;
        $this->balance=$balance;
    }
    public function withdraw(float $withdraw){
        if($this->balance - $withdraw >= 0){
            $this->balance -= $withdraw;
        } else throw new Error('Insufficient funds.');
    }

    public function deposit(float $deposit){
        $this->balance += $deposit;
    }
    public function getName(): string{
        return $this->name;
    }
    public function getBalance(): float{
        return $this->balance;
    }
    function transfer(Account $from, Account $to, int $howMuch) {
        $from->balance -= $howMuch;
        return $to->balance += $howMuch;
    }
}

$mattsAccount = new Account("Matt's account", 1000);
$myAccount = new Account("My account", 0);

echo $mattsAccount ->getName() . ", " . $mattsAccount->getBalance(). PHP_EOL;
echo $myAccount->getName() . ", " . $myAccount->getBalance() . PHP_EOL;
Account::transfer($mattsAccount, $myAccount, 100);

echo $mattsAccount ->getName() . ", " . $mattsAccount->getBalance(). PHP_EOL;
echo $myAccount->getName() . ", " . $myAccount->getBalance() . PHP_EOL;

$a = new Account("A", 100);
$b = new Account("B", 0);
$c = new Account("C", 0);

echo $a->getName() . ", " . $a->getBalance() . PHP_EOL;
echo $b->getName() . ", " . $b->getBalance() . PHP_EOL;
echo $c->getName() . ", " . $c->getBalance() . PHP_EOL;

Account::transfer($a, $b, 50);
Account::transfer($b, $c, 25);

echo $a->getName() . ", " . $a->getBalance() . PHP_EOL;
echo $b->getName() . ", " . $b->getBalance() . PHP_EOL;
echo $c->getName() . ", " . $c->getBalance() . PHP_EOL;
