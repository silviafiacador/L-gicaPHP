<?php
/* As maçãs custam R$ 1,30 cada se forem compradas menos de uma dúzia, e R$ 1,00 se forem compradas pelo menos 12. Escreva um programa que leia o número de maçãs compradas, calcule e escreva o custo total da compra. */
$qtd=13;

if ($qtd<12)
{
    $custototal=1.3*$qtd;
}
else
{
    $custototal=1*$qtd;
}

$custototal = number_format($custototal,2,",");
            
echo "Por $qtd maçãs você pagará R$ $custototal";

?>