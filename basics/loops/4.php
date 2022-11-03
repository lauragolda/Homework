<?php

$numbers = [6, 9 ,5, 18, 21, 65, 17];

for($i = 0; $i < count($numbers);$i++){
    if($numbers[$i]%3==0){
        echo $numbers[$i].PHP_EOL;
    };
}
