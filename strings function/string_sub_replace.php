<?php

	$string = 'This part don\'t serach. This part search';

	$string_new = substr_replace($string,'piyush',29,4);
	
	echo $string_new;

?>