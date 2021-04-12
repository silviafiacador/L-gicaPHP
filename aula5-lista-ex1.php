<?php
/* 
1) A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que 
será emprestado, o tipo de usuário (professor ou aluno) e possa imprimir um recibo 
conforme mostrado a seguir. Considerar que o professor tem 10 dias para devolver o livro 
o aluno somente 3 dias. */
date_default_timezone_set('America/Sao_Paulo');

$nome= "João Macedo";
$tipoUsuario= "P";
$livro= "Harry Potter";
$dataHoje=date("d/F/Y");

if ($tipoUsuario=="P")
{
    $dias = 10;
    //método strtotime pode somar valores em dias (days), meses (months), semanas (weeks) e anos (years)
    $dataDevolucao =  date('d/m/Y', strtotime('+10 days'));
}
else 
{
    $dias=3;
    $dataDevolucao =  date('d/m/Y', strtotime('+3 days'));}


echo "$nome, é um usuário do tipo $tipoUsuario, emprestou o livro $livro no dia $dataHoje e terá que devolvê-lo em $dias dias ou seja em $dataDevolucao";
?>