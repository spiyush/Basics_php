<?php

	$filename = 'name.txt';
	
	if(file_exists($filename)){
	
	echo'file is alreadl exists';
	
	}else{
	
	$handle= fopen($filename,'w');
	
	fwrite($handle,'Nothing');
	
	fclose($handle);
	
	}


?>