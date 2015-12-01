 <?php
	
	if(isset($_POST['name'])){
		
		$name = $_POST['name'];
		
		if(!empty($name)){
			
			$handle = fopen ('names1.txt','a');
			fwrite ($handle ,$name."\n");
			fclose($handle);
		
		}else{
			echo 'please type a name';
		}
	}
?>

<form action ="appending.php" method="post">
		Name:<br>
		<input type = "text" name = "name"><br><br>
		<input type = "submit" value = "Submit">
</form>