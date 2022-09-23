<?php

$name = $_POST["name"];
$login = $_POST["login"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$var_space = "\n";

    $arquivo = fopen('archive.txt', 'w');
    fwrite($arquivo, $name);
    fwrite($arquivo, $var_space);
    fwrite($arquivo, $var_space);
    fwrite($arquivo, $login);
    fwrite($arquivo, $var_space);
    fwrite($arquivo, $var_space);
    fwrite($arquivo, $email);
    fwrite($arquivo, $var_space);
    fwrite($arquivo, $var_space);
    fwrite($arquivo, $senha);
    fclose($arquivo);
   
?>
