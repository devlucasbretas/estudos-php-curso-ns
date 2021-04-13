<?php
// Variáveis Dinânimcas
$bebida = "refrigerante";

// aqui criamos uma variavel que seu nome é o valor da variavel bebida = refrigerante, e atribuimos "Guaraná" como valor.
$$bebida = "Guaraná";

// aqui mostramos a variável refrigerante na tela que irá imprimir Guaraná
echo $refrigerante;
echo "<br>";
echo "<hr>";

// Outro exemplo
$a = "hello";

$$a = "world";

echo "$a $hello";
?>