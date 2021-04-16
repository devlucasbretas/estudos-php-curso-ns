<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form1</title>
</head>
<body>
<?php
/* Sanitização
Funções (filter_input - filter_var)
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_NUMBER_INT
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_URL
*/
?>

<?php
if(isset($_POST['enviar-formulario'])){
    // Array que armazena os erros encontrados
    $erros = array();
    
    // Sanitize - Limpando variáveis
    
    // Input Nome - FILTER_SANITIZE_SPECIAL_CHARS
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);


    // Input Idade - FILTER_SANITIZE_NUMBER_INT
    $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
    // verificando se o dado sanitizado é do tipo int
    if(!filter_var($idade, FILTER_VALIDATE_INT)){
        $erros[] = "Idade precisa ser um inteiro";
    }

    // Input Email - FILTER_SANITIZE_EMAIL
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    // verificando se o dado sanitizado é do tipo email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erros[] = "Email Inválido";
    }

    // Input URL - FILTER_SANITIZE_URL
    $url = filter_input(INPUT_POST, "url", FILTER_SANITIZE_URL);
    // verificando se o dado sanitizado é do tipo url
    if(!filter_var($url, FILTER_VALIDATE_URL)){
        $erros[] = "Url Inválida";
    }


    // Exibindo os erros ao usuário
    if(!empty($erros)){
        foreach ($erros as  $erro) {
            echo "<li> $erro </li>";
        }
    } else {
        echo "Parabéns, seus dados estão corretos";
    };
};


?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="text" name="idade"><br>
        Email: <input type="email" name="email"><br>
        URL: <input type="text" name="url"><br>
        <button type="submit" name="enviar-formulario">Enviar</button>
    </form>
</body>
</html>