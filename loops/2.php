<?php

echo "Input number of terms: ";
$n = (int)readline();
for($i=0; $i<=$n; $i++){
    echo $i*$i;
    echo PHP_EOL;
}