<?php

	$string =' this is an<img scr="image.jpg"> owl'; // we dont pass wirth the sql injection

	//add slashes is used to add shalshes escape different characters for security purposes
	
	$string_slashes = htmlentities(addslashes($string));
	
	echo $string_slashes;
?>