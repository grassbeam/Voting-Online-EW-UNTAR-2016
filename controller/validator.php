<?php
	if (!defined('BASE')) die('<h1 class="try-hack">Restricted access!</h1>');

	class VoteValidator {

		private $email = "";
		private $name = "";
		private $response = null;

		function __construct($email, $name) {

			$this->email = $email;
			$this->name = $name;
		}


		private function check_name() {
			if (strlen($this->name) == 0) {
				return "Nama tidak boleh Kosong";	
			}
			return "";
		}

		private function check_name_content() {
			if (!preg_match("/^[a-zA-Z ]*$/",$this->name)) {
			  return "Only letters and white space allowed for Name"; 
			}
		}

		private function check_email() {
			if (strlen($this->email) == 0) {
				return "Email tidak boleh Kosong";
			}

			return "";
		}

		private function check_email_content() {
			if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
			  return "Invalid format Email"; 
			}
			return "";
		}

		

		// private function check_capcay(){
		// 	if ($response != null && $response->success) {
		// 		return "";
		// 	} else {
		// 		return "Wrong Validation! Please try again.";
		// 	}
			

		// }

		function validate() {
			$error = array(
				$this->check_email(),
				$this->check_email_content(),
				$this->check_name(),
				$this->check_name_content()
				);
			$retval = [];
			foreach ($error as $e) {
				if($e != "") {
					$retval[]=$e;
				}
			}
			return $retval;
		}

		function validateResend(){
			$error = array(
				$this->check_email()
				);
			$retval = [];
			foreach ($error as $e){
				if($e != "") {
					$retval[] = $e;
				}
			}
			return $retval;
		}

	}

?>