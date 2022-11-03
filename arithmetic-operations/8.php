<?php



function calculatePay($name, $pay, $hours){
if($pay < 8.00 || $hours > 60){
    echo "Error";
    echo PHP_EOL;
} else {
    if($pay > 8.00 && $hours <= 40){
        $salary = $hours * $pay;
        echo "{$name} salary is {$salary}$";
        echo PHP_EOL;
    }
    if($pay > 8.00 && $hours > 40 && $hours <= 60){
        $salary = 40 * $pay;
        $overPay = ($hours -40) * ($pay*1.5);
        $fullSalary = $overPay + $salary;
        echo "{$name} salary is {$fullSalary}$;";
        echo PHP_EOL;
    } exit;
}
}

calculatePay("employee2", 8.20, 47);

