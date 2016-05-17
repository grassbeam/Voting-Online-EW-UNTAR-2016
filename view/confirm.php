<?php
if (!defined('BASE')) die('<h1 class="try-hack">Restricted access!</h1>');

if (isset($_GET['redirect']) && $_GET['redirect'] == 'true'){
	redirect('./resend');
}
?>

<!-- CODE BY @LeoPisanGG on Twitter.com !-->
<div class="container">
	<form class="form-signin" method="post" action="?page=confirm">
        <h2>Confirmation Code</h2>
    	<label for="inputCode" class="sr-only">CODE:</label>
        <input type="text" id="inputCode" name="inputCode" class="form-control" placeholder="Confirmation Code" required/>
        <button class="btn btn-lg btn-danger btn-block" name="votecode" type="submit">VOTE!</button>
	</form>
</div>
<br/>
<div align="center">
	<h4>Not Received an Email? Please Check Your Inbox / Spam</h4>
	<h4>or <a href=".?page=confirm&redirect=true">Click Here</a> to Re-Send Your Confirmation Code</h4>
</div>