<?php 

# comentário
// comentário
/*
comentário de um bloco
*/

#variáveis de memória ram
#não é fortemente tipado

$nome="Silvia";
echo $nome."<br>";


$numeroDependentes=3;   #posso fazer cálculos
//$numeroDependentes="3"; #não posso fazer cálculos
$passagem=4.30;   #float = número com casas decimais
$resposta= true;  #booleana =>  true / false

#juntar--> concatenar  --> .
//  echo $nome." número de dependentes= ".$numeroDependentes;
echo "$nome número de dependentes = $numeroDependentes <br>";

$totalPassagens=($numeroDependentes+1)*$passagem;
echo $totalPassagens;
//PHP é case sensitive - faz distinção entre maiúsculas e minúsculas

$num1=4;
//  4² = 16
//pow => power = potência
$num2= pow($num1,2);
echo "<br>".$num2;

//raiz quadrada -->  sqrt = square (quadrado) root (raiz) 
echo "<br>".sqrt($num2);
//div =  /
//mod = resto divisão --> %
//  4/2=2
//  4%2=0
//  5%2=1
// pot --> pow()
// raiz quadrada --> sqrt()

?>