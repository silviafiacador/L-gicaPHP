<?php
/* 88. Some os números de 1 a 100 e imprima o valor.  */
//utilizando o for
//1+2+3+4+5 =15
/*  Teste de mesa
$i
1  2  3  4  5
$soma
0+1=1   1+2=3    3+3=6   6+4=10  10+5=15 
*/

$soma=0;
for ($i=1; $i <=100; $i++) { 
    $soma+=$i;
}
echo "Soma com estrutura repetição for = $soma";
echo "<hr>";

//utilizando o while - CUIDADO COM O PROGRAMA EM LOOPING
$soma=0;
$i=1;
while ($i<=100) {
    //variável acumuladora  $soma=$soma+$i
    $soma+=$i;

    //variável contadora
    $i++;
}
echo "Soma com estrutura repetição while = $soma";
echo "<hr>";

?>
