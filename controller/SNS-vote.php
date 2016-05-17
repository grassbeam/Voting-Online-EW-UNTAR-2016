<?php 
	if (!defined('BASE')) die('<h1 class="try-hack">Restricted access!</h1>' );
	require_once "../apps/config.php";
    require_once "../apps/database.php";
    require_once "../apps/utility.php";
	require_once "../model/voters.php";


	$email = $_SESSION['fb-email'];
	$name = $_SESSION['fb-name'];
	$numstand = $_SESSION['numstand'];

	if ($email == "") {
		$email = $_SESSION['fb-userid'] . '@not-confirmed.fb.com';
	} else {
		if ($email == null) {
			$email = $_SESSION['fb-userid'] . '@not-confirmed.fb.com';
		}
	}

	$voters = new DB_Vote();

	$id = $voters->check_email($email);

	if ($id < 0){
		$result = $voters->create_SNSvotes($numstand, $email, $name);
		redirect('../?page=thankyou');
	}else{
		alert('Email Sudah Digunakan!');
		redirect('../?numstand=' . $numstand);
	}

?>