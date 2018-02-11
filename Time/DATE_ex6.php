<?php

$dt = new DateTime();

$periodo = new DateInterval("P15D"); //Add 15 dias

echo $dt->format("d/m/Y H:i:s");

echo "<br>";
echo "<br>";

$dt->add($periodo); //somando a variavel periodo

echo $dt->format("d/m/Y H:i:s");

?>