<?php

	$filename = 'rename.txt.txt';
	
	$rand = rand(10000,99999); 
	
	if(rename($filename,$rand.'.txt')){
		
		echo 'File <strong>'.$filename.'</strong>has been renamed to <strong>'.$rand.'.txt</strong>';
	}
	else{
		
		echo'error renaming';
	}




?>