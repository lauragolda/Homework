<?php

echo "Geometry calculator: ";
echo PHP_EOL;
echo "Calculate the Area of a Circle";
echo PHP_EOL;
echo "Calculate the Area of a Rectangle";
echo PHP_EOL;
echo "Calculate the Area of a Triangle";
echo PHP_EOL;
echo "Quit";
echo PHP_EOL;
$choice = readline ("Enter your choice (1-4):");

if($choice == 1){
    $radius = readline ("Enter the radius of a circle: ");
    if($radius <= 0){
        echo "Error";
    } else {
        $circleArea = round(M_PI * $radius * 2, 2);
    }
    echo "Te area of a circle is {$circleArea}";
} else if($choice == 2) {
    $length = readline("Enter the length of a rectangle: ");
    $width = readline("Enter the width of a rectangle: ");
    if ($length <= 0 || $width <= 0) {
        echo "Error";
    } else {
    $rectangleArea = $length * $width;
    }
    echo "The area of a rectangle is {$rectangleArea}";
} else if ($choice == 3){
    $baseLength = readline("Enter the length of the base of a triangle: ");
    $height = readline("Enter the height of a triangle: ");
    if($baseLength <=0 || $height <=0){
        echo "Error";
    } else{
        $triangleArea = $baseLength * $height * 0.5;
    }
    echo "The area of a triangle is {$triangleArea}";
} else if($choice == 4){
    echo "Bye! :)";
} else {
    echo "Error";
}