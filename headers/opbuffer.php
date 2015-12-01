<?php
		ob_start();  // storing output in the internal buffer
		// ob_start wil never output on the page .pageoutput will be stand in the internal buffer rather than as header.
	?>
 <h1>MY Page</h1>
 
 this is my page
 
 
<?php
	$redirect_page = 'http://google.co.in';
	
	$redirect = true;    // false when we are not redirecting
	
	if($redirect == true){
	 	header('Location :' .$redirect_page);
	}
	
	ob_end_clean(); //   

    //ob_end_flush();     //  ob_end_flush  fulsing the buffer and den producing the buffer and den back on the page
?> 

