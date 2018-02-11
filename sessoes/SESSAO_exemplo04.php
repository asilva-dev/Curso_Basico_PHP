<?php

//id de sessão é identificação de sessão única

require_once("config.php"); //session start

session_regenerate_id();  //gera novamente um id de seesão

echo session_id();

var_dump($_SESSION); //visualizando o array de sessão

?>