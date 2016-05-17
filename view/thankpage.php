<?php
if (!defined('BASE')) die('<h1 class="try-hack">Restricted access!</h1>');
else 
//	unset($_SESSION['id']);
//	unset($_SESSION['numstand']);
	//session_destroy();
	header('refresh: 4; url=./choose');
?>
<!-- CODE BY @LeoPisanGG on Twitter.com !-->
<div class="container col-xs-6 col-xs-offset-3">
	<p style="text-align: center;">
	<img src="./img/logoEWemail.jpg" alt="UntarEW" width="310" height="auto" class="col-xs-12" />
	</p>
	<div style="text-align: center;">
		<h2 style="text-align: center;"><span style="font-size: 24pt;">Thank You!</span></h1>
		<p>
			<span style="font-size: 18pt;">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<span style="font-size: 12pt;">Your Vote Have Been Counted</span>
				 <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
			</span>
		</p>
	</div>
	<div align="center">
		<a href="./choose">Click here if this page not refreshed</a>
	</div>
</div>

