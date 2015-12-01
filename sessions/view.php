<?php
		session_start();
		
		if(isset($_SESSION['username']) && isset($_SESSION['age'])){
			
		echo 'Welcome '.$_SESSION['username'].'.and age is'.$_SESSION['age'];
		}else
		{
			echo 'please log in';
		}
?>