<?php
//function com argumento
//função irá calcular o número elevado ao quadrado
$numero=111;
//variável global
function elevaQuadrado($valor) {
    //variáveis locais
    //calcular o quadrado do $valor
    $resultado= pow($valor,2);
    echo "O número $valor ² é $resultado - variável número $numero <br> ";
}


elevaQuadrado(3);
elevaQuadrado(5);
elevaQuadrado(8);
?>