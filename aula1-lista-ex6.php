<?php

$a=5;
$b=10;
$c=-8;
$d=1.5;

// rad ( pot ( A, B / A ) ) + C * D
$resultado= sqrt(pow($a,$b/$a))+$c*$d;
print($resultado);
print("<br>R$ ".number_format($resultado,3,",","."));

//number_format([NUMERO], [NUMERO_CASAS_DECIMAIS], [SEPARADOR_DECIMAL], [SEPARADOR_MILHAR])



?>