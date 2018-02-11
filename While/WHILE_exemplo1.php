<?php

$condicao = true; //variavel com condição verdadeira

while($condicao){ //enquanto condicao for verdadeira, executa:
	$numero = rand(1, 10); //função que sorteia um numero entre a sequencia estabelecida

	if($numero === 3){ 
		echo "TRÊS!!!";
		$condicao = false; //termina o while se o numero for 3
	}

	echo $numero . " ";


}



?>