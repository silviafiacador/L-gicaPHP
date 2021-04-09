<?php
/* 96. Escreva um algoritmo que calcule o produto (multiplicação) dos inteiros ímpares de 1 a 15 e, então, exiba os resultados.  
1  3  5  7  9  11  13  15   = resposta
incremento: 2  se começarmos com 1
*/

//com for
$resposta=1;
for ($i=1; $i <=15 ; $i+=2) { 
    //$resposta=$i*$resposta;
    $resposta*=$i; 
}
echo "Resposta = ". number_format($resposta,0,',','.');
echo "<br><hr><br>";

//com while
$resposta=1;
$i=1;
echo "<br>$i";
echo "<br>$resposta<br>";
while ($i <=15) { 
    //$resposta=$i*$resposta;
    $resposta*=$i; 
    $i+=2;   //evita o looping
}
echo "Resposta = ". number_format($resposta,0,',','.');
echo "<br><hr><br>";
?>