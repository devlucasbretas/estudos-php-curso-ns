<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <style type="text/css">
        body {
            display:flex;
            justify-content: center;
            align-items:center;
            background-color:  #5a8ef6;
            flex-direction:column;
        }
        *{
            
            box-sizing:border-box;
        }

        .container {
            width:600px;
            display:flex;
            flex-direction:column;
            height:max-content;
            background-color: #dfe1e1;
            padding: 30px;
            justify-content:space-between;
        }

      

        h3{
            color:whitesmoke;
        }
    </style>
</head>
<body>
    <h3>Lista de Produtos em Estoque:</h3>
    <div class="container">

        <?php

            $produtos = array(
                "Geladeira 386L"=>2200.80,
                "Notebook Asus"=>2100.00,
                "Mesa de 4 Lugares"=>799.90,
                "Pneu Aro 13"=>199.99,
                "Cooktop Philco "=>600.00,
                "Aspirador Mondial"=>179.90,
                "Cama box casal"=>1200.00,
            );


            foreach ($produtos as $key => $value) {
                echo "Item: $key"." Preço R$ ".number_format($value, 2, ",", ".")."<br>";

            }

        ?>
    </div>
</body>
</html>