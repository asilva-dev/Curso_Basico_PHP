<?php

//echo strtotime("2001-09-11"); //converte uma string em tempo

//$ts = strtotime("2007-10-25");//data definida

//$ts = strtotime("now");//data de hoje

//$ts = strtotime("+1 day");//data de amanhã

$ts = strtotime("+1 week");//data daqui uma semana

echo date("l, d/m/Y", $ts);



?>