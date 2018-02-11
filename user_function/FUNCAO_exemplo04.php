<?php

// função que retorna todos argumentos que estão de parametros na função

function ola(){

	$argumentos = func_get_args(); 

	return $argumentos;
}

var_dump(ola("Bom dia!", 10));

?>