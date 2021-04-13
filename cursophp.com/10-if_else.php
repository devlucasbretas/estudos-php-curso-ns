<?php
// Condicionais
// if
// else
// elseif

$numero = 20;

if($numero == 10) {
    echo "É igual a 10";
} else if($numero <= 9) {
    echo "É menor ou igual a 9";
} else {
    echo "é diferente de 10";
} 

echo "<hr>";

// Operador ternário

$media = 7;

echo ($media >= 7 ? "APROVADO" : "REPROVADO");

