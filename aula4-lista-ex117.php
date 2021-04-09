<?php
/*117. Escrever um algoritmo que lê um valor N inteiro e positivo e que calcula e escreve o valor de E. 
 E = 1 + 1 / 1 + 1 / 2 + 1 / 3 + 1 / 4  + 1/... + 1/98 + 1/99 +1/100*/

 //com for
 $n=100;
 $e=1;
 for ($i=1; $i<=$n ; $i++) { 
     $e=$e + 1/$i; 
     echo number_format($e,3,",")."<br>";
 }
 echo number_format($e,3,',');
 echo "<br><hr><br>";

 //com while
 $n=100;
 $e=1;
 $i=1;
 while ( $i<=$n  ) { 
     $e=$e + 1/$i; 
     echo number_format($e,3,",")."<br>";
     $i++;  //olha o looping!!!!!
 }
 echo number_format($e,3,',');
 echo "<br><hr><br>";

?>