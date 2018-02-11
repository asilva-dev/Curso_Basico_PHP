<?php

//Array Bidimensional

$familia = array();

//inserindo um array dentro do outro

array_push($familia, array(
	'nome' => 'Lívia',
	'idade' => 10
));

array_push($familia, array(
	'nome' => 'Giovana',
	'idade' => 15
));

array_push($familia, array(
	'nome' => 'Amanda',
	'idade' => 29
));

array_push($familia, array(
	'nome' => 'Marcia',
	'idade' => 48
));

print_r($familia[2]);

?>