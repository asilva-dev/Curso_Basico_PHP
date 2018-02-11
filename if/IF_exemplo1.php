<?php

$qualsuaidade = 50;

$agebaby = 12;
$ageteen = 18;
$agesenior = 65;

if ($qualsuaidade < $agebaby)
{
	echo "You are a baby";
} 
elseif($qualsuaidade < $ageteen)
{
	echo"It is a Teen";
}
elseif($qualsuaidade < $agesenior){
	echo "Adult";

}
else{
	echo "Velinho Matusalem";
}




?>