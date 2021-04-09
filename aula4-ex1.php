<?php
#trabalhando com arrays

$nomes=array("Rivaldo","Gre","Gus","Davi","Lucas","Samuel","Gui","Gustavo");
echo $nomes[3]."<br>";
echo $nomes[0]."<br>";
echo $nomes[7]."<br>";
echo "Total de elementos do array nomes: ".count($nomes)."<br>";

$estados=["sp","rJ","AM","RN","SC","sP","ES","rs","mG","ba","ms"];
echo strtoupper($estados[7])."<br>";
echo count($estados)."<br>";
echo strtoupper($estados[10])."<br><hr><br>";

print_r($nomes);
echo "<br><br>";
//deixar todos os elementos do vetor estados em letras maiúsculas
for ($i=0; $i <=10; $i++) { 
   $estados[$i]=strtoupper($estados[$i]);
   if ($estados[$i]=="SP") {
       $estados[$i]="São Paulo";
   }
}


//imprimir o vetor estados e deixar em vermelho o estado de são paulo
//estrutura de repetição while(cuidado com o looping) ou for
//imprimir um estado por linha
$i=0;
while ($i<=10) {
    //verificando se o conteúdo é São Paulo
    if($estados[$i]=="São Paulo") {
        echo '<spam style="color:red;">'.$estados[$i]."</spam><br>";
    }
    else {
        echo $estados[$i]."<br>";
    }
    $i++;
}





?>