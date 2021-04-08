<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo-aula3-ex2.css">
    <!-- <style>
        hr {border:solid blue 1px;}
    
    </style> -->
</head>
<body>
    
</body>
</html>

<?php
//imprimir uma lista de números que vão de 10 para 1
//imprimir no formato: 10-9-8-7-6-5-4-3-2-1
//decremento  -1
for ($i=10; $i >= 1; $i-=1) { 
    if ($i==1) {
        echo "$i";
    }
    else
    {
        echo "$i-";
    }
}
echo '<br><hr><br>';

//imprimam do número 1000 até o número 0 - somente os números pares
//1000-998-996.....0    decremento: 2
//linha hr--> largura de 5px amarela solida
for ($i=1000; $i>=0 ; $i-=2) { 
    if ($i==0) {
        echo "$i";
    }
    else
    {
        echo "$i-";
    }
}
echo '<br><hr id="linha2"><br>';


?>