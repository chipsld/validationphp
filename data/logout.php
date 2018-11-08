<?php

	setcookie('client', $_COOKIE['client'], time()-3600);

	session_destroy();

	header("Refresh:0; url=index.php");