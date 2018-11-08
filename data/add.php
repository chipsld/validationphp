<?php
	

	session_start();


	$manga = $_GET['manga'];


	$_SESSION[$manga] = $manga;


	header('Location: produit.php');
