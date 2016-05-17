<?php
	if (!defined('KAMPRET')) die('<h1 class="try-hack">Restricted access!</h1>');

	if(isset($_POST['SecretChamber'])) {
			require_once "./model/Login.php";
			$login_db = new DBLogin();
			$user = $_POST['inputSecretId'];
			$pass = $_POST['inputSecretPass'];
			$result = $login_db->login($user, $pass);
			if ($result > 0) {
				$info = $login_db->get_info($result);
				$_SESSION['user'] = $info['user'];
				$_SESSION['nama'] = $info['nama'];
				redirect('./');
			} else {
				alert('username / password salah!');
			}
	}
?>