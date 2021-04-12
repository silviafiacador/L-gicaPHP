<?php
//trabalhando com funções
//interna ou externa (include)
//interna - function nome_funcao() { o que a função deverá fazer}
function mostraNome() 
{
    echo "TI22&nbsp;";
    echo date("d/m/Y");
    echo "&nbsp;Estou muito orgulhosa de vcs";
}


//invocar a função
mostraNome();
echo "<br>";
mostraNome();
echo "<br>";
mostraNome();

?>