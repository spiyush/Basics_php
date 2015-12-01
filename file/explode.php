<?php

	$filename = 'names.txt';
	$handle = fopen ($filename,'r');
	
	$datain = fread($handle,filesize($filename));
	
	$names_array = explode(',',$datain);
	
	echo $names_array[0];

?>