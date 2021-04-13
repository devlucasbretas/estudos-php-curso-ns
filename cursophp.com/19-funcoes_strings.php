<?php

//  Funções para Strings
/*  strtoupper
    strtolower
    substr
    str_pad
    str_repeat
    strlen
    str_replace
    strpos
*/

// strtoupper
$nome = "Sabrina Lima";
$nomeMaiusculo = strtoupper($nome);
echo $nomeMaiusculo;

echo "<hr>";

// strtolower
$nomeMinusculo = strtolower($nome);
echo $nomeMinusculo;

echo "<hr>";

// substr
$mensagem = "Olá mundo";

echo substr($mensagem, 4, 5);

echo "<hr>";

// strpad

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "*");
echo $novoObjeto;

echo"<hr>";

// str_repeat

$string = str_repeat("Teste ", 5);
echo $string;

echo "<hr>";

// strlen
$mensagem = "Olá Mundo";
echo strlen($mensagem);

echo "<hr>";

// str_replace
$texto = "Desenvolvimento Front-end é maravilhoso, e vamos desenvolver!";
$newTexto = str_replace("maravilhoso", "Incrível", $texto);

echo $newTexto;

echo "<hr>";

// strpos
echo strpos($texto, "vamos");

