<?php
// Criando funções

function exibirNome($nome){
    echo "Olá, Seja bem vindo $nome";
}
exibirNome("Lucas");

echo "<hr>";

function CalcMedia($nome_aluno, $n1, $n2, $n3, $n4) {
    $media = ($n1 + $n2 + $n3 + $n4)/ 4;
    echo "A média é do aluno $nome_aluno foi: ".$media."<br>";
    if($media >= 7){
        echo "Parabéns aluno $nome_aluno, você foi aprovado com a média $media ";
    } else {
        echo "Infelizmente o aluno $nome_aluno foi reprovado com a média $media!";
    }
}

CalcMedia("Lucas",10,9,5,10);

?>