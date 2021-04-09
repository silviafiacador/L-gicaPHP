<?php
/*90. Faça um algoritmo que imprima os múltiplos positivos de 7, inferiores a 1000 */

//utilizando for
//1..1000  /7 se resto % 0 imprime
for ($i=1; $i < 1000; $i++) { 
    if($i%7==0) {
        echo "$i-";
    }
}
echo "<br><br>Valor final da variável \$i: $i";
echo "<br><hr><br>";
//utilizando while -    
$i=1;
while ($i<1000){
    if($i%7==0) {
        echo "$i-";
    }
    $i++;   //evita o LOOPINGGGGGGG!!!!!
}
?>