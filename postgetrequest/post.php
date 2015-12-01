<?php

	$match = 'pass123';

	if(isset($_POST['password'])){
		
		$password = $_POST['password'];
		
		if(!empty($password)){
			
			if($password==$match){
				echo 'that is correct';
			}else{
				
				echo 'that is incorrect';
		}
		}
			else{
				echo 'please enter a password';
			}
		}
		
	
		

?>

<form action ="post.php" method ="POST">
	PASSWORD:<br>
	<input type ="password" name = "password"><br>
	<input type = "submit" value="submit">
</form>	