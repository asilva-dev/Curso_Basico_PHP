<?php

function ola($texto = "Mundo", $periodo){

	return "Olá $texto! $periodo! <br>";
}

echo ola("", "Bom dia1");
echo ola("", "Boa Noite");
echo ola("Amanda", "Boa Tarde");
echo ola("Lívia", "");

?>