<?php

	
	$find = array('is','piyush','moscow');
	
	$string = 'my name is piyush and i live in moscow';
	
	echo $string.'<br><br>';

	//$string_new = str_replace('piyush','piyush moon',$string);
	
	$string_new = str_replace($find,'',$string);
	
	echo $string_new;

?>  