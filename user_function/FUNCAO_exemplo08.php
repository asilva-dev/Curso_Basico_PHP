<?php

//Funções Novidades

function soma(int...$valores) : float{ //: e o tipo de dado a ser retornado

	return array_sum($valores);

}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(29, 10);
echo "<br>";
echo soma(2.5, 2.3); //int foi definido como parâmetro ele ignora o numero após a vírgula 
echo "<br>";




?>