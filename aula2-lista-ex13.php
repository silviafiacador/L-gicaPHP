<?php
$n1=8;
$n2=9.5;
$n3=9;
$mediafinal=($n1*2+$n2*3+$n3*5)/10;
echo number_format($mediafinal,1);
//echo $mediafinal;

//regra: se média for maior ou igual a 7 --> aprovado, caso contrário ele foi reprovado

#estrutura de decisão - comando if (se) - if composto
if ($mediafinal>=7)
{
    echo (" - Aprovado");
}
else
{
    echo (" - Reprovado");
}


?>