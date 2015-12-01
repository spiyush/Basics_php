<?php

	$string ='thisisstring';
	
	//preg_match(); /// this does ot tell you where the match is but tell u by 1or 0 depending on whether thier is match
	
	//if(preg_match('/ /', $string)){
		//echo 'match found';
		
	//}else{
		//echo 'mtch not found';
	//}


	
	function has_space($string){
		
		if(preg_match('/ /', $string)){
			
			return true;
		} else {
			
			return false;
		}
	}
	
	
	if (has_space($string)){
		echo 'has at least one space';
	}
	
	else {
		echo 'has no space';
	}
	
	

?>