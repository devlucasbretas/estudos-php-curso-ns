<?php
//-------------------------------------------------- Funções para Números ----------------------------------------------------------\\
// number_format
// round
// ceil
// floor
// rand

//number_format()
$db = 1234.56;
$preco = number_format($db, 2, ",", ".");

echo "O Preço do produto é R$ $preco";
echo "<hr>";
// -----------------------------------------------------------------------------------------------------------------------------------

// round arredondamento relativo
echo round(3.4);

echo "<hr>";

// ceil arredondamento pra cima
echo ceil(8.1);

echo "<hr>";

// floor arredondamento pra baixo
echo floor(5.5);

echo "<hr>";

// rand geração de números aleatórios
echo rand(1,50);

