<?php 
	//if (!defined('BASE')) die('<h1 class="try-hack">Restricted access!</h1>');
	define('BASE', 'BASE');
	session_start();
	
	
	if(isset($_SESSION['fb-token'])) {
		require_once "../controller/SNS-vote.php";

	}else {
		if (isset($_SESSION['fb-logined'])) {

		} else {
			echo '<h1 class="try-hack">Error Token</h1>';
		}
	}
?>

