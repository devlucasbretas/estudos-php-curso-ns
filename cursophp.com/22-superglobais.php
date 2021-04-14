<?php
// Superglobais
/*
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/
// -----------------------------------------------------------------------------------------------------------------------------------


// $GLOBALS 

$n1 = 60;
$n2 = 40;

function soma(){
   echo $GLOBALS["n1"] + $GLOBALS["n2"];
}
soma();

echo "<hr>";

// $_SERVER

echo $_SERVER["PHP_SELF"]."<br>";
echo $_SERVER["SERVER_NAME"]."<br>";
echo $_SERVER["SCRIPT_FILENAME"]."<br>";
echo $_SERVER["DOCUMENT_ROOT"]."<br>";