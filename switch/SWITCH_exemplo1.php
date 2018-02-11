<?php

$diadasemana =  date("w");

switch ($diadasemana) {
	case  0:
		echo "Domingo";
		break;
	case  1:
		echo "Segunda";
		break;
	case  1:
		echo "Terça";
		break;
	case  2:
		echo "Quarta";
		break;
	case  3:
		echo "Quinta";
		break;			
	case  4:
		echo "Sexta";
		break;
	case  5:
		echo "Sabado";
		break;
	case  6:
		echo "Domingo";
		break;		
	default:
		echo "Nenhum dia";
}






?>