<?php

class SavingsAccounts
{
    private float $balance;
    public function __construct($balance) {
        $this->balance = $balance;
    }
    public function getBalance() {
        return $this->balance;
    }
    public function withdraw(float $amountToWithdraw) {
        return $this->balance -= $amountToWithdraw;
    }
    public function deposit(float $amountToDeposit) {
        return $this->balance += $amountToDeposit;
    }
    public function monthlyInterest(float $interestAmount, int $months) {
        $percentage = $interestAmount / 100;
        $annual = $percentage * $this->balance * 12;
        return $annual / $months;
    }
}

$userBalance = readline('Enter the amount of money in the account:  ');
$annualInterest = readline('Enter the annual interest rate %: ');
$time = readline ('Enter the amount of months your account has been opened for: ');

$userSavings = new SavingsAccounts($userBalance);

$months = range(1, $time);
$monthCount = 0; // I am too lazy for for loops
$totalDeposit = 0;
$totalWithdraw = 0;

foreach($months as $month) {
    $monthCount += 1;
    (float) $userDeposit = readline("Enter amount deposited for month $monthCount: ");
    (float) $userWithdraw = readline("Enter amount withdrawn for month $monthCount: ");

    $userSavings->deposit($userDeposit);
    $userSavings->withdraw($userWithdraw);

    $totalDeposit += $userDeposit;
    $totalWithdraw += $userWithdraw;
}

echo  "Total deposited: $$totalDeposit" . PHP_EOL;
echo "Total withdrawn: $$totalWithdraw" .PHP_EOL;
echo "Interest earned: $" . $userSavings->monthlyInterest($annualInterest, $time) . PHP_EOL;
$userSavings->deposit($userSavings->monthlyInterest($annualInterest, $time));
echo "Ending balance: $" . $userSavings->getBalance() . PHP_EOL;
