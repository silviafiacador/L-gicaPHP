<?php
/* 2)Entrar com 20 números e imprimir a soma dos positivos e o total de números negativos. */
$numeros=[1,-9,88,-1,-3,100,25,1,-77,-500,9000,12,5,4,30,14,21,2,16,-1000];
//        0                                                          19  = 20 elementos

$posicao=0;
$somaPositivos=0;
$contaNegativos=0;

while ($posicao<=19)
{
    //verificando se o número é positivo ou negativo
    if ($numeros[$posicao]>=0)
    {
        $somaPositivos+=$numeros[$posicao];
        #$somaPositivos = $somaPositivos + $numeros[$posicao];
    }
    else 
    {
        $contaNegativos++;
    }
    echo $numeros[$posicao]."&nbsp;&nbsp;&nbsp;&nbsp;";
    $posicao++;
}
echo "<br>Soma dos números positivos= $somaPositivos";
echo "<br>Total de números negativos = $contaNegativos";


?>
