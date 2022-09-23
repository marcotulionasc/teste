<?php

include "auxiliar.php";


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
  echo "Seu e-mail não é válido. Por favor verifique novamente";
}
  else {
    echo "<br>";
    echo "<b>O e-mail</b> ".$email." <b>é válido</b>";
    echo "<br>";
    echo "<b>O nome é: </b>".$name;
    echo "<br>";
    echo "<b>O login é: </b>".$login;
    echo "<br>";
    echo "<b>A senha é: </b>".$senha;
    echo "<br>";
}
date_default_timezone_set("America/Sao_Paulo");
echo "<br>";
echo "<b>Hoje é dia </b>".date("d/m/y")."<br>";
echo "<b>Hora agora: </b>".date("h:i:s a");
echo "<br>";
?>