<?php

$nome="Renata";
$sexo="f";
$idade=10;

$sexo= strtoupper($sexo);
//$sexo= strtolower($sexo);

//operadores lógicos e -> &&
//operadores lógicos ou -> ||  pipe

//vamos resolver este problema com 4 ifs simples. Verifica a opção verdadeira
if ($sexo=="M" && $idade>10)
{
    $presente="Dominó";
}
if ($sexo=="F" && $idade>10)
{
    $presente="Uno";
}
if ($sexo=="F" && $idade<=10)
{
    $presente="Quebra-cabeça";
}
if ($sexo=="M" && $idade<=10)
{
    $presente="Pintura";
}

echo "Presente para ".$nome." será ".$presente;


?>