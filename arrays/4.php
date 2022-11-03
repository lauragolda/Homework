<?php

$numbers1 = range(1,100);
shuffle($numbers1);
for($i = 0; $i < 10; $i++){
    /*echo $numbers1[$i];
    echo PHP_EOL;*/
}
for ($i = 0; $i<10; $i++){
    $replacement = array(9 => -17);
    $newNumbers1 =array_replace($numbers1, $replacement);
    echo "Array 1: ";
    echo $newNumbers1[$i];
    echo PHP_EOL;
}
$numbers2 =[];
for($i = 0; $i<10; $i++){
    $numbers2 = $numbers1[$i];
    echo "Array 2: ";
    echo $numbers2;
    echo PHP_EOL;
}



