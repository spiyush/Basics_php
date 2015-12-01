<?php
  // header function can not be used after output has been sent to the page boz we are already sending to the function 
	$redirect_page = 'http://google.co.in';
	
	$redirect = true;
	
	if($redirect == true){
	 	header ('Location :' .$redirect_page);
	}



?>