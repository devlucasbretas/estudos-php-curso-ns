<?php
// Arrays
$carros = array(1=>"Polo",2=>"Gol",3=>"Golf",4=>"Malibu");
echo "<hr>";

// Inserindo dados no array
$carros[] = "Amarok";
$carros[6] = "Dodge";
print_r($carros);
echo "<hr>";

// Outra Maneira de adicionar dados no array
$motos = array();
$motos[] = "CB500R";
$motos[] = "MT09";
$motos[] = "Kawasaki";
print_r($motos);
echo "<hr>";

// Outra maneira de criar array
$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo "<hr>";

// Contando arrays
$totalClientes = count($motos);
echo $totalClientes;
echo "<br>";

// Loop Foreach
foreach ($carros as $valor) {
    echo $valor."<br>";
}

echo "<hr>";

 foreach ($clientes as $key => $value) {
     echo "Na Posição $key temos o cliente $value <br>";
 }
 echo "<hr>";


//  Arrays associativos
$pessoa = array("nome"=>"Lucas","idade"=>24,"altura"=>1.76);
$pessoa["cidade"] = "São José dos Campos";

foreach($pessoa as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}
echo "<br>";
echo $pessoa["cidade"];
echo "<hr>";


// Arrays Multidimensionais
$usuarios_cadastrados = array(
    "masculino"=> 
        array(
            "SP"=>"Jorge",
            "RS"=>"Adalberto",
            "SC"=>"Higor",
            "MS"=>"Valdiney",
            "PR"=>"Creone"
        ),
    "feminino"=> 
        array(
            "SC"=>"Maria",
            "RJ"=>"Vanessa",
            "MS"=>"Betina",
            "PR"=>"Bruna",
            "MG"=>"Carla"
            )
);

echo "<b>Usuários cadastrados do gênero masculino: </b>";
echo "<hr>";
foreach($usuarios_cadastrados["masculino"] as $key => $valor) {
    echo "Estado: ".$key." "."Usuário: ".$valor."<br>";
}
$totalM = count($usuarios_cadastrados["masculino"]);
echo "<b>Total de usuários masculino cadastrados: $totalM</b>";
echo "<hr>";

echo "<b>Usuários cadastrados do gênero feminino: </b>";
echo "<hr>";
foreach($usuarios_cadastrados["feminino"] as $key => $valor) {
    echo "Estado: ".$key." "."Usuário: ".$valor."<br>";
}
$totalF = count($usuarios_cadastrados["feminino"]);
echo "<b>Total de usuárias femininas cadastradas: $totalF</b>";



