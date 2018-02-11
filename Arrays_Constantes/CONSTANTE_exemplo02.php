<?php

//Colocando um array dentro do define - novidade do PHP7

define("BANCO_DE_DADOS",[
	'127.0.0.1',
	'root',
	'password',
	'test'	
], true); //true é para a constante ser case sensitive

print_r(BANCO_DE_DADOS);

?>