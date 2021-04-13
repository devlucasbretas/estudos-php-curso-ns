<?php

// Operadores lógicos
// Nos permitem fazer comparações entre  expressões
// e (&& - and)
// ou (|| - or)
// negação (!)

$idade = 24;
$nome = "Lucas Bretas";

if(($idade == 234) or ($nome == "Lucas Bretas")) {
    echo "Usuário encontrado!";
} else {
    echo "Usuário não encontrado!";
}