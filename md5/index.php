<?php

 if(isset($_POST['user_password'])&& !empty($_POST['user_password'])){
	
		$user_password= md5($_POST['user_password']);
		
		$filename = 'hash.txt';
		$handle = fopen($filename,'r');
		$file_password = fread ($handle,filesize ($filename));
		
		if($user_password==$file_password){
			echo 'password correct';
		}else{
			echo 'paaswordord incorrect';
		}
		
		
}else{
 echo 'please enter password';
}

?>
<form action ="index.php" method ="POST">
	Password: <input type="text" name ="user_password"><br><br>
	<input type="submit" value ="submit">
	</form>