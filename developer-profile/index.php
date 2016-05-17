<?php
	define('BASE', 'BASE');
    //set session lifetime for 30 minutes. (Not Used)
    ini_set(session.save_path, getcwd() . "/tmp"); //used
    ini_set('display_errors', 1);
    //ini_set('session.gc_maxlifetime', 1800);
    //session_set_cookie_params(1800);
    session_start();
    $config['site']['title'] = 'Voting UNTAR Entrepreneur Week';
	
	require_once "../controller/Mobile_Detect.php";
    $detek = new Mobile_Detect;
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
        <link href="../style/css/bootstrap.min.css" rel="stylesheet">
        <link href="../style/css/developer-profile.css" rel="stylesheet">
        <link href="./style/css/footer.css" rel="stylesheet">
        <link href="./style/css/footer-mobile.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
        <script src="../style/js/bootstrap-custom.js"></script>
    </head>

    <body>
    	<div class="wrapper">
	<?php
		if ( $detek->isMobile() || $detek->isTablet() ) {
	        require_once('./view/navbar-mobile.php'); 
	    } else {
	        require_once('./view/navbar-normal.php'); 
	    }
    ?>
					<div class="home-doctors  clearfix">

					    <div class="container">
					        <div class="row">
				                <div class="col-lg-12 col-md-12 col-sm-12 ">
				                    <div class="slogan-section animated fadeInUp clearfix ae-animation-fadeInUp">
				                        <h2>Meet our <span>Web Developer</span></h2>
				                    </div>
				                </div>
					    	</div>
					        <div class="row">
						            <div class="col-lg-4 col-md-4 col-sm-6  text-center doc-item">
				                        <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

					                        <ul class="list-inline social-lists animate">
												<li><a href="https://twitter.com/hexacrown"><i class="fa fa-twitter"></i></a></li>
												<li><a href="https://www.facebook.com/hexacrown/"><i class="fa fa-facebook"></i></a></li>
												<li><a href="https://www.instagram.com/hexacrown/"><i class="fa fa-instagram"></i></a></li>
											</ul>

	                                        <figure>
								                    <img width="670" height="700" src="../img/martha2.jpg" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="Martha"> 
								            </figure>

						                    <div class="text-content">
						                        <h5>Martha Gunawan</h5>
						                        <!-- <div class="for-border"></div> -->
						                        <h5><small><a href="mailto:535130019@fti.untar.ac.id" target="_top">535130019@fti.untar.ac.id</a></small></h5>
						                        <h5><small>NPM: 535130019</small></h5>
						                        <h5><small>Jurusan Teknik Informatika</small></h5>
						                        <h5><small>Universitas Tarumanagara</small></h5>
						                    </div>
						                </div>
						            </div>
						            <div class="col-lg-4 col-md-4 col-sm-6  text-center doc-item">
				                        <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

					                        <ul class="list-inline social-lists animate">
												<li><a href="https://twitter.com/Vneshia"><i class="fa fa-twitter"></i></a></li>
												<li><a href="https://www.facebook.com/vinesia.subyanca"><i class="fa fa-facebook"></i></a></li>
												<li><a href="https://www.instagram.com/vneshia/"><i class="fa fa-instagram"></i></a></li>
											</ul>

	                                        <figure>
								                    <img width="670" height="700" src="../img/vines2.jpg" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="Vinesia"> 
								            </figure>

						                    <div class="text-content">
						                        <h5>Vinesia Subyanca</h5>
						                        <!-- <div class="for-border"></div> -->
						                        <h5><small><a href="mailto:vinesia_subyanca@yahoo.com" target="_top">vinesia_subyanca@yahoo.com</a></small></h5>
						                        <h5><small>NPM: 535130061</small></h5>
						                        <h5><small>Jurusan Teknik Informatika</small></h5>
						                        <h5><small>Universitas Tarumanagara</small></h5>
						                    </div>
						                </div>
						            </div>
						            <div class="col-lg-4 col-md-4 col-sm-6  text-center doc-item">
				                        <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">

					                        <ul class="list-inline social-lists animate">
												<li><a href="https://twitter.com/LeoPisanGG"><i class="fa fa-twitter"></i></a></li>
												<li><a href="https://www.facebook.com/LeoPisanGG/"><i class="fa fa-facebook"></i></a></li>
												<li><a href="https://www.instagram.com/leopisang/"><i class="fa fa-instagram"></i></a></li>
												<li><a href="https://www.youtube.com/c/LeoPisanGG/"><i class="fa fa-youtube"></i></a></li>
											</ul>

	                                        <figure>
								                    <img width="670" height="500" src="../img/leo2.jpg" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="Leonardo"> 
								            </figure>

						                    <div class="text-content">
						                        <h5>Leonardo Cahaya</h5>
						                        <!-- <div class="for-border"></div> -->
						                        <h5><small><a href="mailto:535130084@fti.untar.ac.id" target="_top">535130084@fti.untar.ac.id</a></small></h5>
						                        <h5><small>NPM: 535130084</small></h5>
						                        <h5><small>Jurusan Teknik Informatika</small></h5>
						                        <h5><small>Universitas Tarumanagara</small></h5>
						                    </div>
						                </div>
						            </div>
					        	<div class="visible-sm clearfix margin-gap"></div>
					        </div>
					    </div>
					</div>
				</div>
			<?php
				if ( $detek->isMobile() || $detek->isTablet() ) {
	                require_once('./view/footer-mobile.html'); 
	            } else {
	                require_once('./view/footer.html'); 
	            }
            ?>


	</body>
</html>