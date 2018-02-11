<?php

//função anônima

function test($callback){

	//processo lento 

	$callback();

}

test(function(){

	echo "terminou";

});

?>