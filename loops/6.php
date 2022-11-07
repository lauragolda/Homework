<?php

$lines = intval(readline("Enter the amount of lines: "));
$stars = 8;
$slash = 4;
for ($i = 1; $i <= $lines; $i++) {
    for ($j = 1; $j <= ($lines-$i)*$slash; $j++){
        echo '/';
    }
    for ($k = 1; $k <= (($stars*$i)-$stars); $k++) {
        echo '*';
    }
    for ($m = 1; $m <= ($lines-$i)*$slash; $m++) {
        echo '\\';
    }
    echo PHP_EOL;
}