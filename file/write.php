<?php

		$handle = fopen ('names.txt','w');
		
		
		fwrite($handle,'piyush');
	fwrite($handle,'piyu');// if u write only piyush den and want close and den witre 
	//something is will erase the last written words
	
	fclose ($handle);

	echo 'written completed';
	
?>