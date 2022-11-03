<?php

$elements = [1, 46, 867, 17.64, "apple"];
function doubleInt ($elements) {
    for ($i = 0; $i < count($elements); $i++) {
        if(is_int($elements[$i])){
            $test = $elements[$i]*2;
            echo "${test}";
            echo PHP_EOL;
        }
    }
}
doubleInt($elements);
