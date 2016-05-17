<?php
    define('BASE', 'BASE');
    //set session lifetime for 30 minutes. (Not Used)
    ini_set(session.save_path, getcwd() . "/tmp"); //used
    ini_set('display_errors', 1);
    //ini_set('session.gc_maxlifetime', 1800);
    //session_set_cookie_params(1800);
    session_start();

    require_once "apps/config.php";
    require_once "apps/database.php";
    require_once "apps/utility.php";
    require_once "controller/Mobile_Detect.php";
    $detek = new Mobile_Detect;

    $now = new DateTime();
    $setstarttime = new DateTime("2016-05-04 09:15:00");
    $setstoptime = new DateTime("2016-05-09 00:20:00");
    if ($now <= $setstarttime) {
        alert('Entrepreneurweek UNTAR 2016 belum resmi dibuka!\nVoting dapat dilakukan mulai dari 04-05-2016 jam 09.00 s/d 08-05-2016 jam 21.00');
        redirect('./choose/');   
    } else {
        if ($now >= $setstoptime) {
            alert('Entrepreneurweek UNTAR 2016 Telah Berakhir!\nTerima kasih atas partisipasinya dan sampai jumpa kembali tahun depan!');
            redirect('./choose/');   
        }
    }
    
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    else{
        $page = "vote";
    }

    //$detect = new Mobile_Detect();
    $is_voted = (isset($_SESSION['id']) || isset($_SESSION['fb-token']));

    if(isset($_GET['numstand'])) {
        if($_GET['numstand'] < 15 && $_GET['numstand'] > 0){
            $_SESSION['numstand'] = $_GET['numstand'];    
        } else {
            die('<h1 class="try-hack">Access DENIED!!</h1>');
        }
    }
    else {
        if($is_voted || isset($_POST['vote'])) {
            
        } else {
            if(isset($_GET['confirm'])) {
                
            } else {
                redirect('choose/');
            }
        }
    }

    if(($page == "confirm") || isset($_GET['confirm']))
    {
        $page = "confirm";
    } else{
        if (($page == "thankyou") && $is_voted) {
            $page = "thankyou";
        } else {
            $page = "vote"; 
        }
    } 



        //load controller
        switch ($page) {
            case "confirm":
            require_once "controller/confirm.php";
            break;
            case "vote":
            ///////////////// Captcha ///////////////////////
            require_once "./apps/capcay/recaptchalib.php";
            // your secret key
            $secret = "6Lcq-B4TAAAAAA3hIKl0-PV1GX4X4ZkojdVTjv1Z";
            // check secret key
            $reCaptcha = new ReCaptcha($secret);
            // empty response
            $response = null;
            ////////////////////////////////////////////////
            require_once "./controller/vote.php";
            
            break;
        }
?>



<!DOCTYPE html>
<html lang="en">
<!-- CODE BY @LeoPisanGG on Twitter.com !-->
	<head>
    <!-- CODE BY @LeoPisanGG on Twitter.com !-->
    	<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content=""/>
        <meta name="author" context=""/>
        <title><?php echo $config['site']['title']; ?></title>
        <link rel="shortcut icon" href="http://static.wixstatic.com/media/fbd849_badfa26e07fb44e3baac50c9a4226a1a.png/v1/fill/w_16%2Ch_16%2Clg_1/fbd849_badfa26e07fb44e3baac50c9a4226a1a.png" type="image/png"/>
        <link rel="apple-touch-icon" href="http://static.wixstatic.com/media/fbd849_badfa26e07fb44e3baac50c9a4226a1a.png/v1/fill/w_16%2Ch_16%2Clg_1/fbd849_badfa26e07fb44e3baac50c9a4226a1a.png" type="image/png"/>
        <link href="style/css/bootstrap.min.css" rel="stylesheet">
        <link href="style/css/footer.css" rel="stylesheet">
        <link href="style/css/footer-mobile.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="./style/js/bootstrap-custom.js"></script>
            <?php 
            switch ($page) {
            case "confirm":
            echo "<link href=\"style/css/votepage.css\" rel=\"stylesheet\">";
            break;
            case "thankyou":
            break;
            case "vote":
            echo "<link href=\"style/css/votepage.css\" rel=\"stylesheet\">";
            echo "<link href=\"style/css/bootstrap-social.css\" rel=\"stylesheet\">";
            echo "<link href=\"style/css/docs.css\" rel=\"stylesheet\">";
            echo "<link href=\"style/css/font-awesome.css\" rel=\"stylesheet\">";
            echo "<script src='https://www.google.com/recaptcha/api.js' async defer></script>";
            echo "<script type=\"text/javascript\" src=\"style/js/oauthpopup.js\"></script>";
            echo "<script type=\"text/javascript\">
                    $(document).ready(function(){
    $('#btn-sns1').click(function(e){
        var wdth = screen.width * 90 / 100 ;
        var hght = screen.height * 80 / 100;
        $.oauthpopup({
            path: './view/fb-login.php',
            width: wdth,
            height: hght,
            callback: function(){
                //window.location.reload();
                window.location='./view/SNS.php';
            }
        });
        e.preventDefault();
    });
});
</script>";
            
            break;
            }
            
            ?>
        
    </head>
    <!-- CODE BY @LeoPisanGG on Twitter.com !-->
    <body> 
        <?php
            //load div wrapper
            if ( $detek->isMobile() || $detek->isTablet() ) {
                echo '<div id="wrapper">';
            }

            //load page view
            switch ($page) {
                case "confirm":
                    require_once "./view/confirm.php";
                    break;
                case "thankyou":
                    require_once "./view/thankpage.php";
                    break;
                case "vote":
                    require_once "./view/vote.php";
                    break;
            }
            //load footer
            if ( $detek->isMobile() || $detek->isTablet() ) {
                require_once('./view/footer-mobile.html'); 
            } else {
                require_once('./view/footer.html'); 
            }

            if ( $detek->isMobile() || $detek->isTablet() ) {
                echo '</div>';
            }
        ?>
        
	</body>
    <!-- CODE BY @LeoPisanGG on Twitter.com !-->
</html>