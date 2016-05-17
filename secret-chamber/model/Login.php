<?php
	if (!defined('KAMPRET')) die('<h1 class="try-hack">Restricted access!</h1>');


	class DBLogin extends Database {

		function login($username, $password) {
			$this->check_connection();
			
			$username = $this->sanitize($username);
			$password = $this->sanitize($password);
			
			$query = "SELECT id, pass FROM snti16_voteew2016.login WHERE user = '" .  $username . "'";
			$result = $this->query($query);
			
			if($result->num_rows > 0) { //cek username ada ato kgk
				$row = mysqli_fetch_array($result);
				if (password_verify($password, $row['pass']))
					return $row['id'];
				else
					return -1;
			}
			else
				return -1;
		}

		function get_info($id) {
			$this->check_connection();
			$id = $this->sanitize($id);
			$query = "SELECT user, nama FROM snti16_voteew2016.login WHERE id = '" . $id . "'";
			$result = $this->query($query);
			
			if ($result->num_rows > 0 ) {
				$info = mysqli_fetch_array($result);
				return $info;
			}
			else 
				return NULL;
		}

		
	}

?>