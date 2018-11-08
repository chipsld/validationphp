<?php
	
		$email = $_GET['email'];


		if ( preg_match ("/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $email))
		{
			$template = '<p> L\'input email est validé par la regex ! </p>';
			echo($template);
		}
		else
		{
			$template = '<p> Ceci n\'est pas un email ! </ p>';
			echo($template);
		} 
	
?>