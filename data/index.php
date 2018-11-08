<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title> tp</title>
</head>
<body>
	<div class="columns is-mobile is-centered">
		<div class="column is-half">
			<?php
				require('templating/navbar.php');
			?>
		</div>
	</div>
	<div class="columns is-mobile is-centered">
		<div class="column is-half">
			<?php
				require('templating/home.php');
			?>
		</div>
	</div>


	<div class="columns is-mobile is-centered">
		<div class="column is-half">
			<?php
				require('templating/footer.php');
			?>
		</div>
	</div>


</body>
<script src="script.js"></script>
</html>

