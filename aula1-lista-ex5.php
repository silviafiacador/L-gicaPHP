<?php

$a=5;
$b=10;
$c=-8;
$d=1.5;

//pot ( -C, 2 ) + ( D * 10 ) / A 
$resultado=pow(-$c,2)+($d*10)/$a;
echo $resultado."<br>";
echo gettype($resultado);

