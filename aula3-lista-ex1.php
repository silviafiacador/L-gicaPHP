<?php
/*1)Faça um algoritmo que calcule e apresente o valor do volume de uma lata de óleo, utilizando a fórmula VOLUME = 3,14159 * RAIO² * ALTURA (medir a lata de óleo de casa em centímetros). */

$raio=10;
$altura=15;
$volume= 3.14159*pow($raio,2)*$altura;

#                    $raio * $raio * $altura
#                     cm       cm      cm    =  cm³

$volume=number_format($volume,2,",",".");
echo "O volume da lata de Toddy é  $volume cm³";



?>
