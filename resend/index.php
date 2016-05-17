<?php
	define('BASE', 'BASE');
	
    ini_set(session.save_path, getcwd() . "../tmp");
    ini_set('display_errors', 1);
    //ini_set('session.gc_maxlifetime', 1800); //set session lifetime for 30 minutes.
    //session_set_cookie_params(1800);
    session_start();

    require_once "../apps/config.php";
    require_once "../apps/database.php";
    require_once "../apps/utility.php";

    require_once "./capcay/recaptchalib.php";
    // your secret key
    $secret = "6Ldg4R4TAAAAAIt_zOQnbO8-mi26HtZUfII_-lAg";
     
    // empty response
    $response = null;
     
    // check secret key
    $reCaptcha = new ReCaptcha($secret);

    require_once "../controller/resend.php";
?>
<!DOCTYPE html>
<html lang="en">
<!-- CODE BY @LeoPisanGG on Twitter.com !-->
	<head>
    	<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content=""/>
        <meta name="author" context=""/>
        <link rel="icon" href="favicon.ico" />
        <link href="../style/css/footer.css" rel="stylesheet">
        <link href="../style/css/resend.css" rel="stylesheet">
        <link href="../style/css/bootstrap.min-custom.css" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <!-- CODE BY @LeoPisanGG on Twitter.com !-->
<body> 
<!-- CODE BY @LeoPisanGG on Twitter.com !-->
<div class="container">
	<form class="form-signin" method="post" action=".">
        <h2>Re-Send Email Confirmation Code</h2>
    	<label for="inputCode" class="sr-only">Email:</label>
        <input type="text" id="inputResend" name="inputResend" class="form-control" placeholder="Email" required/>
        <div class="g-recaptcha" align="center" width="360" data-sitekey="6Ldg4R4TAAAAAOZ13lp5dl_j8cn13dKg8ys86xC6"></div>
        <button class="btn btn-lg btn-success btn-block" name="resend" type="submit">Submit</button>
	</form>
</div>
<div class="footer-container">
        <div class="footer-bottom" align="center">
	        <span align="left" class="logo-fti">
	        	<a href="http://fti.tarumanagara.ac.id/"><img class="preload-me retinized" width="113" height="43" alt="UNTAR" src="../img/logofti.png"></a>  
	        </span>
	        <span class = "footer-word">
	        	©2016 UNTAR Entrepreneur Week .All Right Reserved | Web Development By 535130019-Martha Gunawan, 535130061-Vinesia Subyanca, 535130084-Leonardo Cahaya. 
	        </span>
        </div>
    </div>
</body>
<!-- CODE BY @LeoPisanGG on Twitter.com !-->
</html>