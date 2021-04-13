<?php
// Estrutura for
for ($contador = 0; $contador <= 10; $contador++) {
    echo "7 X $contador = ".$contador*7 ."<br>";
}

echo "<hr>";

// Estrutura foreach
$cores = array("Verde","Azul","Preto","Roxo","Branco","Marron");

foreach($cores as $key => $valor){
    echo "A cor da posição $key é: $valor <br>";
}