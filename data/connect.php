<?php
	
	session_start();


	$client = $_GET['pseudo'];

	


	setcookie('client',$client,time()+60*60*24*30);

	header('Location: index.php');
