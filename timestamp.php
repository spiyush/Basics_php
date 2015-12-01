<?php
	
	$time = time();
	
	$current_time = date('d M Y @ H:i:s',$time);
	
	$modified_time = date( 'd M Y @ H:i:s', strtotime('+1 week 2 hour and 30 seconds'));
	
	echo 'The Current date and time is '.$current_time. '<br> and the modified date and time is '.$modified_time;
?>