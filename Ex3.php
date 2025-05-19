<?php 
echo "Calculating the value of the function y(x)\n";

echo "Введите значене x: ";
$x = (float)trim(fgets(STDIN));

if ($x<-1) {
     $y = pow($x, 6)*log10(abs(pow(6, $x)-pow(abs($x-5),$x)));
     echo "y(x) = $y";
}
else if ($x>=-1 && $x<1) {
     $y = sin($x/(1-2*pow($x,2)));
     echo "y(x) = $y";
}
else if ($x>=1) {
     $y = asin(1/pow($x,4));
     echo "y(x) = $y";
}
?>