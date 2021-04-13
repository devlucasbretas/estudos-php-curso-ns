<?php
/*
* is_array($array) = verificar se uma determinada variável é um array
* in_array($valor, $array) = verifica de um determinado valor existe dem alguma posição do aarray
* array_keys($array) = retorna um novo array com as chaves do array passado como parâmetro
* array_values($array) = retorna um novo array com os valores do array passado como parâmetro
* array_merge ($array1, $array2) = agrega o conteudo dos dois arrays
* array_pop($array) = exclui a primeira posição do array
* array_shift($array) = exclui a primeira posição do array
* array_unshift($array, "valor") = adiciona um ou mais elementos no início do array
* array_push($array, "valor, "valor") = Adiciona um ou mais elementos no final de um array
* array_combine($keys, $values) = mescla os dois arrays passados
* array_sum() = calcula a soma dos elementos de um array
* explode("/", "20/01/2001") = transforma string em array
* implode("-", $array) = transforma um arrray em string
*/

$nomes = array("Mãe"=>"Maria", "Pai"=>"Felipe", "Tio"=>"Rodrigo", ""=>"José");

$values = array_values($nomes);
print_r($valuess);

