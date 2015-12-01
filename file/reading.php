 <?php
	
	if(isset($_POST['name'])){
		
		$name = $_POST['name'];
		
		if(!empty($name)){
			
			$handle = fopen ('names1.txt','a');
			fwrite ($handle ,$name."\n");
			fclose($handle);
			
			echo 'current names in file:';
		
			$count=1;
			$reading = file ('names1.txt');
			$reading_count = count($reading);
			
			foreach($reading as $name){
				
				echo trim($name);
				if($count<$reading_count){
					echo', ';
				}
				$count++;
			}
		
		}else{
			echo 'please type a name';
		}
	}
?>

<form action ="reading.php" method="post">
		Name:<br>
		<input type = "text" name = "name"><br><br>
		<input type = "submit" value = "Submit">
</form>