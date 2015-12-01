<?php
	
	$food = array('healthy'=>
							array ('salad','vegetables ','pasta'),
							
				  'unhealthy'=>
							array ('ice creame','gupchup','paneer')
	
	);    
	
	foreach($food as $element => $inner_array){
	echo '<strong>'.$element.'</strong><br>';
	
	foreach($inner_array as $item){
		echo $item.'<br>';
	};
	}	
?>