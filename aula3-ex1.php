<?php
//estrutura de repetição --> para --> for
// for(inicialização da variável, condição, incremento ou decremento)
// incremento --> +  $i=$i+10   $i++  $i+=10
// decremento --> -  $i=$i-1   $i--  $i-=1

//imprimir 5 vezes o texto - TI22
//$i= variável contadora
for ($i=1; $i <=1000 ; $i++) { 
  echo "$i - TI22<br>";
}

echo "<br><hr><br>";
// comparação ==
// conte de 1 até 10 e imprima no formato:
// 1-2-3-4-5-6-7-8-9-10
// incremento: 1
for ($i=1; $i <=10; $i++) { 
    if($i==10) {
        echo ("$i");
    }
    else {
        echo ("$i-");
    }
    
}


?>