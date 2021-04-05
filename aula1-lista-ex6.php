<?php

$a=5;
$b=10;
$c=-8;
$d=1.5;

// rad ( pot ( A, B / A ) ) + C * D
$resultado= sqrt(pow($a,$b/$a))+$c*$d;
print($resultado);

?>