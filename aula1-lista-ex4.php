<?php

$a=5;
$b=10;
$c=-8;
$d=1.5;

// ( 30 mod 4 * pot ( 3, 3 ) ) * -1
$resultado= (30%4*pow(3,3))*-1;
print $resultado."<br>";
echo gettype($resultado);


?>