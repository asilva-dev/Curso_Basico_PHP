<?php

require_once("config.php");

//session_unset($_SESSION["nome"]); //apaga a sessao nome

echo $_SESSION["nome"];

//session_destroy($_SESSION["nome"]); //limpa a variavel e remove o usuario

?>