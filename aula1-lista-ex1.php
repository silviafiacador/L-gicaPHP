<?php 
/* Supondo que A, B e C são variáveis do tipo inteiro, com valores iguais a 5, 10 e -8, 
respectivamente, e uma variável D com valor de 1.5, quais os resultados das expressões 
aritméticas apresentadas em seguida?
a) 2 * A mod 3 – C   */

#criando as variáveis de memória
$a=5;
$b=10;
$c=-8;
$d=1.5;

#resolvendo a expressão:  2 * A mod 3 – C 
// mod => %
$resultado= 2*$a%3-$c;
echo $resultado;


?>