<?php

	$string ='this ia an exapmle & demo  of ! string .';
	
	
	//program 1     $string_word_count = str_word_count($string,0);  // output 6
	
					//echo $string_word_count;
	
	
	
	 //program 2 $string_word_count = str_word_count($string,1);		
	
	   //print_r ($string_word_count);// Array ( [0] => this [1] => ia [2] => an [3] => exapmle [4] => of [5] => string )


	   
	  // program 3  $string_word_count = str_word_count($string,2);		// example off associative array
	
	  // print_r ($string_word_count);     //Array ( [0] => this [5] => ia [8] => an [11] => exapmle [19] => of [22] => string )
	   
	 // program 4 $string_word_count = str_word_count($string,1, '.');	// usefull stop as array	
	
//print_r ($string_word_count);//Array ( [0] => this [5] => ia [8] => an [11] => exapmle [19] => of [22] => string [29] => . )
	   
	   $string_word_count = str_word_count($string,1, '&!.');	// usefull sybols  as array	
	
print_r ($string_word_count)

//Array ( [0] => this [1] => ia [2] => an [3] => exapmle [4] => & [5] => demo [6] => of [7] => ! [8] => string [9] => . )


?>