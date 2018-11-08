<?php
	
	session_start();
	
	$allAchats = $_SESSION;
	


	getAllAchats($allAchats);


	function getAllAchats($allAchats)
	{
		foreach ($allAchats as $unAchat) {

			$template = '<div class="box"';
			$template .= '<p>'.$unAchat.'</p>';
			$template .= '</div>';

			echo($template);
		}

		
	}


