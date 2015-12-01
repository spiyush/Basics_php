<?php

	require 'conndb.php';
	
	if(isset($_POST['search_name'])){
		
		$search_name = $_POST['search_name'];
		
		if(!empty($search_name)){
			
			$query = "SELECT 'name' FROM 'names' WHERE 'name' LIKE '%".mysql_real_escape_string($search_name)."%'";
			
			if($query_run = mysql_query($query)){
				
				echo 'query run';
				
			}
			
			/*if(mysql_num_rows($query_run)>=1){
				
				echo'result found';
				
			}else{
				
				echo'no result found';
				
			}*/
			
		}
		
	}
?>

<form acction = "index.php" method = "POST">
 
	NAME: <input type ="text" name="search_name">
	<input type ="submit" value = "serach">
	
</form>	