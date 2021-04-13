<?php
// -------------------------------------------------------- Operadores Aritimédicos ----------------------------------------------- \\
// Adição +
// Subtração -
// Multiplicação *
// Divisão /
// Módulo % -> resto da divisão
// Exponenciação **
// -------------------------------------------------------------------------------------------------------------------------------- \\

// exemplo de utilização do operador módulo
$numeros = [1,2,3,4,5,6,7,8,9,10];

foreach ($numeros as $value) {
    if($value % 2 == 0) {
        echo "Número $value é par <br>";
    } else {
        echo "Número $value é impar <br>";
    }
};
echo "<hr>";

// exemplo de utilização do operador de potenciação
foreach ($numeros as $value) {
    echo "$value*$value é: ".$value**$value. "<br>";
}

?>