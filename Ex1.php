<?php
echo "Введите x: ";

$x = (float)(fgets(STDIN));

$y = asin(pow(sqrt(abs($x)) / (sqrt(abs($x)) + 1), 5)) + pow($x * $x + 1, 1 / 5) + log(pow(2, sin($x)) + pow(abs($x), cos($x)), 2);

echo "y(x) = " . round($y, 2) . "\r\n";

if ($y >= 0 && ($x * $x + $y * $y <= 25)) {
    echo "True";
} else {
    echo "False";
}
?>
