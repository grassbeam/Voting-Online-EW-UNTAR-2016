<?php
	if (!defined('BASE')) die('<h1 class="try-hack">Restricted access!</h1>');

	class DB_Vote extends Database {

		function create_code($email, $name, $numsta) {
			$this->check_connection();

			$email = $this->sanitize($email);
			$name = $this->sanitize($name);

			$times = date('Y/m/d h:i:s:u', time());
			$seeds = $email . $times;
			$generate = substr(md5($seeds), 0, 5);
			$generate = strtoupper($generate);
			$checker = $this->check_code($generate);
			while ($checker > 0) {
				$times = date('Y/m/d h:i:s:u', time());
				$seeds = $email . $times;
				$generate = substr(md5($seeds), 0, 5); 
				$checker = $this->check_code($generate);
			}
			$query = "INSERT INTO snti16_voteew2016.validator (id, code, email, name, id_stand, status) VALUES (NULL, '". $generate ."', '" . $email . "', '" . $name . "', '". $numsta ."',0)";
			$result = $this->query($query);
			return $result; 
		}

		function write_code($email, $name, $generate) {
			

			$query = "INSERT INTO snti16_voteew2016.validator (id, code, email, name, id_stand, status) VALUES (NULL, '". $generate ."', '" . $email . "', '" . $name . "', 0)";
			$result = $this->query($query);
			return $result;
		}

		function check_code($code) {
			$this->check_connection();
			$code = $this->sanitize($code);
			$query = "SELECT id FROM snti16_voteew2016.validator WHERE code = '" . $code . "'";
			$result = $this->query($query);
			if($result->num_rows > 0) {
				$info = mysqli_fetch_array($result);
				return $info['id'];
			
			} else {
				return -1;
			}
		}

		function check_email($email) {
			$this->check_connection();
			$email = $this->sanitize($email);

			$query = "SELECT id FROM snti16_voteew2016.validator WHERE email = '" . $email . "'";
			$result = $this->query($query);

			$query = "SELECT id FROM voters WHERE email = '" . $email . "'";
			$result2 = $this->query($query);


			if($result->num_rows > 0 || $result2->num_rows > 0) {
				return 99;
			} else {
				return -1;
			}

		}

		function check_validator($email){
			$this->check_connection();
			$email = $this->sanitize($email);

			$query = "SELECT status FROM snti16_voteew2016.validator WHERE email = '" . $email . "'";
			$result = $this->query($query);

			if($result->num_rows > 0) {
				$row = mysqli_fetch_array($result);
				if($row['status'] > 0 ) {
					return 99;
				} else {
					return -1;
				}
			} else {
				if($this->check_email($email) > 0) {
					return 99;
				} else {
					return -1;
				}
			}


		}

		// function check_SNSemail($email) {
		// 	$this->check_connection();
		// 	$email = $this->sanitize($email);

		// 	$query = "SELECT id FROM voters WHERE email = '" . $email . "'";
		// 	$result = $this->query($query);

		// 	if($result->num_rows > 0) {
		// 		return 99;
		// 	} else {
		// 		return -1;
		// 	}

		// }

		function get_id_by_email($email) {
			$this->check_connection();
			$email = $this->sanitize($email);
			$query = "SELECT id FROM snti16_voteew2016.validator WHERE email = '" . $email . "'";
			$result = $this->query($query);

			if($result->num_rows > 0) {
				$ress= mysqli_fetch_array($result);
				return $ress['id'];
			} else {
				return -1;
			}
		}

		function get_id_by_code($code) {
			$this->check_connection();
			$code = $this->sanitize($code);
			$query = "SELECT id FROM snti16_voteew2016.validator WHERE code = '" . $code . "'";
			$result = $this->query($query);

			if($result->num_rows > 0) {
				$ress= mysqli_fetch_array($result);
				return $ress['id'];
			} else {
				return -1;
			}
		}

		function get_info($id) {
			$this->check_connection();
			$id = $this->sanitize($id);
			$query = "SELECT * FROM snti16_voteew2016.validator WHERE id = '" . $id . "'";
			$result = $this->query($query);

			if($result->num_rows > 0) {
				$ress= mysqli_fetch_array($result);
				
				return $ress;
			} else {
				return NULL;
			}
		}

		function get_client_ip() {
		    $ipaddress = '';
		    if (getenv('HTTP_CLIENT_IP'))
		        $ipaddress = getenv('HTTP_CLIENT_IP');
		    else if(getenv('HTTP_X_FORWARDED_FOR'))
		        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		    else if(getenv('HTTP_X_FORWARDED'))
		        $ipaddress = getenv('HTTP_X_FORWARDED');
		    else if(getenv('HTTP_FORWARDED_FOR'))
		        $ipaddress = getenv('HTTP_FORWARDED_FOR');
		    else if(getenv('HTTP_FORWARDED'))
		       $ipaddress = getenv('HTTP_FORWARDED');
		    else if(getenv('REMOTE_ADDR'))
		        $ipaddress = getenv('REMOTE_ADDR');
		    else
		        $ipaddress = 'UNKNOWN';
		    return $ipaddress;
		}

		function create_votes($idCode,$numstand,$email,$name) {
			$this->check_connection();
			$times = date('Y-m-d', time());
			$ipaddr = $this->get_client_ip();
			$query = "INSERT INTO snti16_voteew2016.voters (id, name, tgl_lahir, ip_addrs, email, id_code, id_stand, date) VALUES (NULL, '" . $name . "', '" . $times . "', '". $ipaddr . "', '" . $email .  "', '" . $idCode . "', '" . $numstand ."', CURRENT_TIMESTAMP); ";
			
			$result = $this->query($query);
			if ($result) {
				$result = $this->update_status_code($idCode);
			}
			return $result;
		}

		private function update_status_code($idCode) {
			$query = " UPDATE snti16_voteew2016.validator SET status = 1 WHERE id = '" . $idCode . "'; ";
			$result = $this->query($query);
			return $result;
		}

		function create_SNSvotes($numstand,$email,$name) {
			$this->check_connection();
			$times = date('Y-m-d', time());
			$ipaddr = $this->get_client_ip();
			$query = "INSERT INTO snti16_voteew2016.voters (`id`, `name`, `tgl_lahir`, `ip_addrs`, `email`, `id_code`, `id_stand`, `date`) VALUES (NULL, '" . $name . "', '" . $times . "', '". $ipaddr . "', '" . $email .  "', 666123456 , " . $numstand .", CURRENT_TIMESTAMP);";
			
			$result = $this->query($query);
			
			return $result;
		}


		private function getValidatorStatus($id) {
			$query = "SELECT id FROM snti16_voteew2016.validator WHERE id = '" . $id . "' AND status = '0';";
			$result = $this->query($query);
			$row = mysqli_fetch_array($result);
			if ($result->num_rows > 0) {
				return $row['id'];
			} else {
				return -1;
			}
		}

		private function decodeLink($ciphertext) {
			$data = $ciphertext;
		    return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
		}


		function check_from_link($link) {
			$ciphtext = $link;
			$plaintext = $this->decodeLink($ciphtext);

			$arr = explode('asdefg', $plaintext);
			if (count($arr) > 1) {
				$email = $arr[0];
				$code = $arr[1];
				$ide = $this->get_id_by_email($email);
				$idc = $this->get_id_by_code($code);
				if ( $ide == $idc ) {
					return $this->getValidatorStatus($ide);
				} else {
					return -99;
				}
			} else {
				return -666; 
			}
			

		}

		function getResendStatus($id) {
			$query = "SELECT id, status FROM snti16_voteew2016.validator WHERE id = '" . $id . "' AND status = '0'";
			$result = $this->query($query);
			//$row = mysqli_fetch_array($result);
			if ($result->num_rows > 0) {
				return $id;
			} else {
				return -1;
			}
		}






	}

?>