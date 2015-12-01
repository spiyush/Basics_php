<?php
	$find = array('kushal','piyush','devanshu','sanchi');
	$replace = array('gabbar','chiku','pillu','pillu');
	
	if(isset($_POST['user_input'])&& !empty($_POST['user_input'])){
		$user_input= $_POST['user_input'];
		$user_input_lc =strtolower($user_input);//or use str_ireplace-but this only give the selected word in lc but strtolower($user_input)
																													//to the whole sentence.
		$user_input_new = str_replace($find,$replace,$user_input_lc); //  only this $user_input remove _lc
		echo $user_input_new;
	}

?>

<hr>
<form action ="wordsensoring.php" method ="POST">
	<textarea name="user_input" rows="6" cols="30"><?php $user_input ; ?></textarea><br><br>
		<input type="submit" value ="submit">
	</form>