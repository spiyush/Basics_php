<?php

//  check 2 thisgs does it existand is itb emoty or not

	if(isset($_GET['day'])&& isset($_GET['date'])&& isset($_GET['year'])){
		
		$day = $_GET['day'];
		$date = $_GET['date'];
		$year = $_GET['year'];
		
		if(!empty($day)&&!empty($date)&&!empty($year)){
			
			echo 'it is'.$day.''.$date.''.$year;
		} else {
			
			echo 'fill in all fields';
			
		}
		
	}
		

?>

<form action ="get.php" method ="GET">

	DAY:<br><input type ="text" name = "day"><br>
	DATE:<br><input type ="text" name = "date"><br>
	YEAR:<br><input type ="text" name = "year"><br>
	
	<input type = "submit" value ="submit">
</form>	