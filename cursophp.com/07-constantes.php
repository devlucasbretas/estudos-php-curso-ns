<?php
// Constantes
define("NOME","Lucas Bretas");
define("IDADE",24);
define("ALTURA", 1.89);
define("CASADO", true);

define("TIMES", ['vasco', 'flamengo', 'santos']);

echo "Meu nome é ".NOME;
echo "<hr>";
echo TIMES[1];
echo "<hr>";

// Constantes possuem escopo global por padrão
// Constantes não podem ter o seu valor alterado durante a execução do programa
function exibeNome(){
    echo NOME;
}
exibeNome();
?>