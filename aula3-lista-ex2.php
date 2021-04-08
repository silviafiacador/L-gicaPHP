<?php

/*2) Faça um algoritmo para ler: a descrição do produto (nome), a quantidade adquirida e o preço 
unitário. Calcular e escrever o total (total = quantidade adquirida * preço unitário), o desconto e o total 
a pagar (total a pagar = total - desconto), sabendo-se que: 
 - Se quantidade <= 5 o desconto será de 2% 
 - Se quantidade > 5 E quantidade <=10 o desconto será de 3% 
 - Se quantidade > 10 o desconto será de 5% */

$nome = "parafuso sextavado";
$qtde = 10000;
$preco =1;

#calculando o total
$total = $qtde * $preco;

#calculando o % de desconto - 3ifs simples - só executa quando a condição retornar verdadeiro (true)
if ($qtde <= 5) {
    $desconto =2/100;
    //$desconto=0.02;
}
if ($qtde > 5 && $qtde <= 10) {
    $desconto=3/100;
}
if ($qtde>10) {
    $desconto=5/100;
}

//calculando o valor do desconto sobre o total
$valorDesconto=$total*$desconto;

//calculando o total com o desconto
$totalComDesconto=$total-$valorDesconto;

//exibindo os resultados
echo "Produto comprado: $nome, quantidade: $qtde <br>";
echo "Preço unitário: R$ ".number_format($preco,2,",",".")."<br>";
echo "Valor total sem desconto: R$ ".number_format($total,2,",",".")."<br>";
echo "% de desconto: ".$desconto*100;
echo "<br>Valor do desconto: R$ ".number_format($valorDesconto,2,",",".")."<br>";
echo "Total com o desconto: R$ ".number_format($totalComDesconto,2,",",".")."<br>";

