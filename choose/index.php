<?php 
	define('BASE', 'BASE');
    require_once "../apps/config.php";
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
        <link rel="shortcut icon" href="http://static.wixstatic.com/media/fbd849_badfa26e07fb44e3baac50c9a4226a1a.png/v1/fill/w_16%2Ch_16%2Clg_1/fbd849_badfa26e07fb44e3baac50c9a4226a1a.png" type="image/png"/>
		<link rel="apple-touch-icon" href="http://static.wixstatic.com/media/fbd849_badfa26e07fb44e3baac50c9a4226a1a.png/v1/fill/w_16%2Ch_16%2Clg_1/fbd849_badfa26e07fb44e3baac50c9a4226a1a.png" type="image/png"/>
        <title><?php echo $config['site']['title']; ?></title>
        <link href="../style/css/bootstrap.min-custom.css" rel="stylesheet">
        <link href="../style/css/IndexChoose.css" rel="stylesheet">
        <link href="../style/css/auto-text.css" rel="stylesheet">
        <script src="../style/js/bootstrap-custom.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </head>
    <!-- CODE BY @LeoPisanGG on Twitter.com !-->
<body> 
	<div id="page-container">

		<div class="banner-top-container col-xs-offset-0 col-md-offset-2 col-lg-offset-2" align="center">
			<div class="logo-untar-container col-xs-1 col-md-3 col-lg-3" align="center">
		        <a href="http://untar.ac.id/"><img class="logo-untar preload-me retinized" width="195" height="49" alt="UNTAR" src="https://static.wixstatic.com/media/271030_6a050a7d338d4bf6b1bf7e9491da8b22.png/v1/fill/w_381,h_108,al_c,lg_1/271030_6a050a7d338d4bf6b1bf7e9491da8b22.png"></a> 
		    </div>
		    <div class="title-container col-xs-20 col-xs-push-4 col-xs-offset-0 col-md-12 col-md-push-2 col-md-offset-0 col-lg-15 col-lg-push-4 col-lg-offset-0">
		    	<h1 class="title-text">VOTING ENTREPRENEURWEEK 7 UNTAR</h1>
		   	</div> 
		    <div class="logo-ew2016-container col-xs-1 col-md-3 col-md-push-2 col-md-offset-0 col-lg-3 col-lg-offset-0 col-lg-push-14">
		        <a href="http://www.entrepreneurweekuntar.com/"><img class="logo-ew2016 preload-me retinized" width="139" height="93" alt="EW-UNTAR" src="https://static.wixstatic.com/media/fbd849_badfa26e07fb44e3baac50c9a4226a1a.png/v1/fill/w_368,h_267,al_c,usm_0.66_1.00_0.01/fbd849_badfa26e07fb44e3baac50c9a4226a1a.png"></a> 
		    </div>
		</div>

		<div class="clearfix visible-xs-block visible-md-block visible-lg-block"></div>
		<br/>
	    	<div class="row-stand col-xs-offset-1 col-md-offset-2 col-lg-offset-2">

	  			<div class="thmbnl-stand thmbnl-stand-upper col-md-7 col-lg-3" id="stand_1">
	    			<div class="thumbnail">
	      				<img src="../img/stand1.png" alt="Stand 1"  title="Stand 1">
	      				<div class="caption" id="caption-upper">
	        				<h3>KRIBCORN</h3>
	        				<p class="fonts">Cara baru makan Popcorn.</p>
	      				</div>
	      				<p class="btn-vote" align="left">
	                            <a href="../?numstand=1" class="btn btn-danger" role="button">Vote This!</a>
	                        </p>
	    			</div>
	  			</div>

	            <div class="thmbnl-stand thmbnl-stand-upper col-md-7 col-lg-3" id="stand_2">
	    			<div class="thumbnail">
	      				<img src="../img/stand2.png" alt="Stand 2" title="Stand 2">
	      				<div class="caption" id="caption-upper">
	        				<h3>ARS LIGNA</h3>
	        				<p class="fonts">Produce Art Accurately.</p>
	        				
	      				</div>
	      				<p class="btn-vote" align="left">
	                        	<a href="../?numstand=2" class="btn btn-danger" role="button">Vote This!</a>
	                        </p>
	    			</div>
	  			</div>

	  			<div class="thmbnl-stand thmbnl-stand-upper col-md-7 col-lg-3" id="stand_3">
	    			<div class="thumbnail">
	      				<img src="../img/stand3.png" alt="Stand 3" title="Stand 3">
	      				<div class="caption" id="caption-upper">
	        				<h3>SPASIA</h3>
	        				<p class="fonts">Spaghetti ala Indonesia.</p>
	        				
	      				</div>
	      				<p class="btn-vote" align="left">
	                        	<a href="../?numstand=3" class="btn btn-danger" role="button">Vote This!</a>
	                        </p>
	    			</div>
	  			</div>

	  			<div class="thmbnl-stand thmbnl-stand-upper col-md-7 col-lg-3" id="stand_4">
	    			<div class="thumbnail">
	      				<img src="../img/stand4.png" alt="Stand 4" title="Stand 4">
	      				<div class="caption" id="caption-upper">
	        				<h3>KROBI</h3>
	        				<p class="fonts">Cruncy outside, melted inside.</p>
	        				
	      				</div>
	      				<p class="btn-vote" align="left">
	                        	<a href="../?numstand=4" class="btn btn-danger" role="button">Vote This!</a>
	                        </p>
	    			</div>
	  			</div>

	  			<div class="thmbnl-stand thmbnl-stand-upper col-md-7 col-lg-3" id="stand_5">
	    			<div class="thumbnail">
	      				<img src="../img/stand5.png" alt="Stand 5" title="Stand 5">
	      				<div class="caption" id="caption-upper">
	        				<h3>BOCIL</h3>
	        				<p class="fonts">Taste the healthiness.</p>
	        				
	      				</div>
	      				<p class="btn-vote" align="left">
	                        	<a href="../?numstand=5" class="btn btn-danger" role="button">Vote This!</a>
	                        </p>
	    			</div>
	  			</div>

	  			<div class="thmbnl-stand thmbnl-stand-upper col-md-7 col-lg-3" id="stand_6">
	    			<div class="thumbnail">
	      				<img src="../img/stand6.png" alt="Stand 6" title="Stand 6">
	      				<div class="caption" id="caption-upper">
	        				<h3>B.A.Q</h3>
	        				<p class="fonts">Easy to carry, help environment.</p>
	        				
	      				</div>
	      				<p class="btn-vote" align="left">
	                        	<a href="../?numstand=6" class="btn btn-danger" role="button">Vote This!</a>
	                        </p>
	    			</div>
	  			</div>

	  			<div class="thmbnl-stand thmbnl-stand-upper col-md-7 col-lg-3" id="stand_7">
	    			<div class="thumbnail">
	      				<img src="../img/stand7.png" alt="Stand 7" title="Stand 7">
	      				<div class="caption" id="caption-upper">
	        				<h3>SUSHIBAN</h3>
	        				<p class="fonts">Try our antimainstream food.</p>
	        				
	      				</div>
	      				<p class="btn-vote" align="left">
	                        	<a href="../?numstand=7" class="btn btn-danger" role="button">Vote This!</a>
	                        </p>
	    			</div>
	  			</div>

			</div>

			<div class="clearfix visible-lg-block"></div>

			<div class="row-stand col-xs-offset-1 col-md-offset-2 col-lg-offset-2">
	    	
	  			<div class="thmbnl-stand col-md-7 col-lg-3" id="stand_8">
	    			<div class="thumbnail">
	      				<img src="../img/stand8.png" alt="Stand 8" title="Stand 8">
	      				<div class="caption" id="caption-lower">
	        				<h3>CHEESE PONG</h3>
	        				<p class="fonts">Unleash the Cheese.</p>
	        				
	      				</div>
	      				<p class="btn-vote" align="left">
	                        	<a href="../?numstand=8" class="btn btn-danger" role="button">Vote This!</a>
	                        </p>
	    			</div>
	  			</div>

	            <div class="thmbnl-stand col-md-7 col-lg-3" id="stand_9">
	    			<div class="thumbnail">
	      				<img src="../img/stand9.png" alt="Stand 9" title="Stand 9">
	      				<div class="caption" id="caption-lower">
	        				<h3>WARUNG ES BATAVIA</h3>
	        				<p class="fonts">Nostalgia kesegaran tempo doeloe.</p>
	      				</div>
	      				<p class="btn-vote" align="left">
	                        	<a href="../?numstand=9" class="btn btn-danger" role="button">Vote This!</a>
	                        </p>
	    			</div>
	  			</div>

	  			<div class="thmbnl-stand col-md-7 col-lg-3" id="stand_10">
	    			<div class="thumbnail">
	      				<img src="../img/stand10.png" alt="Stand 10" title="Stand 10">
	      				<div class="caption" id="caption-lower">
	        				<h3>POTACO</h3>
	        				<p class="fonts">When Potato meets Taco.</p>
	        				
	      				</div>
	      				<p class="btn-vote" align="left">
	                        	<a href="../?numstand=10" class="btn btn-danger" role="button">Vote This!</a>
	                        </p>
	    			</div>
	  			</div>

	  			<div class="thmbnl-stand col-md-7 col-lg-3" id="stand_11">
	    			<div class="thumbnail">
	      				<img src="../img/stand11.png" alt="Stand 11" title="Stand 11">
	      				<div class="caption" id="caption-lower">
	        				<h3>NAKAL</h3>
	        				<p class="fonts">Cause its taste more than its cover.</p>
	      				</div>
	      				<p class="btn-vote" align="left">
	                        	<a href="../?numstand=11" class="btn btn-danger" role="button">Vote This!</a>
	                        </p>
	    			</div>
	  			</div>

	  			<div class="thmbnl-stand col-md-7 col-lg-3" id="stand_12">
	    			<div class="thumbnail">
	      				<img src="../img/stand12.png" alt="Stand 12" title="Stand 12">
	      				<div class="caption" id="caption-lower">
	        				<h3>MAGAZA</h3>
	        				<p class="fonts">Fill goods, feels good.</p>
	      				</div>
	      				<p class="btn-vote" align="left">
	                        	<a href="../?numstand=12" class="btn btn-danger" role="button">Vote This!</a>
	                        </p>
	    			</div>
	  			</div>

	  			<div class="clearfix visible-md-block"></div>

	  			<div class="thmbnl-stand col-md-7 col-md-offset-3 col-lg-3 col-lg-offset-0 col-centered" id="stand_13">
	    			<div class="thumbnail">
	      				<img src="../img/stand13.png" alt="Stand 13" title="Stand 13">
	      				<div class="caption" id="caption-lower">
	        				<h3>SIR CHICK</h3>
	        				<p class="fonts">Try it, love it.</p>
	      				</div>
	      				<p class="btn-vote" align="left">
	                        	<a href="../?numstand=13" class="btn btn-danger" role="button">Vote This!</a>
	                        </p>
	    			</div>
	  			</div>

	  			<div class="thmbnl-stand col-md-7 col-md-offset-1 col-lg-3 col-lg-offset-0 col-centered" id="stand_14">
	    			<div class="thumbnail">
	      				<img src="../img/stand14.png" alt="Stand 11" title="Stand 14">
	      				<div class="caption" id="caption-lower">
	        				<h3>SANDWITCH</h3>
	        				<p class="fonts">The magic we can taste.</p>
	      				</div>
	      				<p class="btn-vote" align="left">
	                        <a href="../?numstand=14" class="btn btn-danger" role="button">Vote This!</a>
	                    </p>
	    			</div>
	  			</div>
	        
	    </div>

</body>
<!-- CODE BY @LeoPisanGG on Twitter.com !-->
</html>