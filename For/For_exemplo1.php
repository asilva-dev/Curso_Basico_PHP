<?php


	for ($i = 0; $i < 1000; $i+= 5) {
		if ($i >= 200 && $i <= 800) continue; //para pular os números entre 200 e 800

		if($i === 900) break; //quando chegar no 900 para o for

		echo $i ."<br>";;

	}


?>