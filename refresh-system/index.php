<?php
	define('BASE', 'BASE');
    //set session lifetime for 30 minutes. (Not Used)
    ini_set(session.save_path, getcwd() . "/tmp"); //used
    ini_set('display_errors', 1);
    //ini_set('session.gc_maxlifetime', 1800);
    //session_set_cookie_params(1800);
    session_start();


    require_once "../apps/utility.php";

    session_destroy();
    alert('System Refreshed!');
    redirect('../');
?>