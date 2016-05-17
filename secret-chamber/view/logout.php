<?php
	define('KAMPRET', 'KAMPRET');
	//ini_set(session.save_path, getcwd() . "../tmp");
    // ini_set('display_errors', 1);
    // ini_set('session.gc_maxlifetime', 1800);
    // session_set_cookie_params(1800);
    session_start();
    require_once "../apps/utility.php";
	if (isset($_SESSION['user'])) {
		session_destroy();
		redirect('../?page=login');
	} else {
		die('<h1 class="try-hack">Restricted access!</h1>');
	}
?>