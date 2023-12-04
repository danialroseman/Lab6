<?php
function calculateArea($length, $width) {
    $area = $length * $width;
    return $area;
}

$length = 5; 
$width = 8; 

$result = calculateArea($length, $width);

echo "The area of the rectangle with length $length and width $width is: $result";
?>
