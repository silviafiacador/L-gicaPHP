<?php
/* 3)Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3 
centímetros por ano. Construir um algoritmo que calcule e imprima quantos anos serão 
necessários para que Juca seja maior que Chico. */

#trabalhar na mesma unidade de medida ou seja, ou trabalharemos em metros ou em centímetros
#vamos trabalhar em cm para que os números fiquem inteiros
# 1,10 m *100 = 110 cm    1,5m * 100 = 150cm
$juca=110;
$chico=150;
$anos=0;
while ($juca<=$chico) {
    $juca+=3;
    $chico+=2;
    $anos++;
}
echo "Chico com $chico cm e Juca com $juca cm  <br> ";
echo "Para que Juca ultrapasse a altura de Chico, passaram-se $anos anos";

?>