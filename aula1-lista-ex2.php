<?php

$a=5;
$b=10;
$c=-8;
$d=1.5;

//  rad ( -2 * C ) div 4

$resultado=sqrt(-2*$c)/4;
print $resultado."<br>";

echo gettype($a)."<br>";
$a=5.1;
echo gettype($a)."<br>";
$a=true;
echo gettype($a)."<br>";
$a="teste";
echo gettype($a)."<br>";
$a="12";
echo gettype($a)."<br>";

?>