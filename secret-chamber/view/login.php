<?php
	if (!defined('KAMPRET')) die('<h1 class="try-hack">Restricted access!</h1>');

?>

		<div class="container">
			<form class="form-signin" method="post" action=".">
		        <h2>Login Secret Chamber</h2>
		        <label for="inputSecretId" class="sr-only">Id Secret:</label>
		    	<input type="text" id="inputSecretId" name="inputSecretId" class="form-control" placeholder="Secret Chamber ID" required/>
		    	<label for="inputSecretPass" class="sr-only">Nama:</label>
		        <input type="password" id="inputSecretPass" name="inputSecretPass" class="form-control" placeholder="Secret Chamber Pass" required/>
		        <button class="btn btn-lg btn-primary btn-block" name="SecretChamber" type="submit">LOGIN</button>
			</form>
		</div>