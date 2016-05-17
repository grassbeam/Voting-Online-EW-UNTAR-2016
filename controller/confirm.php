<?php 
	if (!defined('BASE')) die('<h1 class="try-hack">Restricted access!</h1>');

	require_once "model/voters.php";
	$voter = new DB_Vote();
	
	if(isset($_POST['votecode'])) {
		$code = $_POST['inputCode'];
		$code = strtoupper($code);
		$id = $_SESSION['id'];
		$numstand = $_SESSION['numstand'];

		

		

		$row = $voter->check_code($code);

		if($row>0) {
			//destroy all session
			$idBase = $voter->get_id_by_code($code);
			if ($idBase == $id) {
				$ress = $voter->get_info($id);
				if ($ress['status'] == 0) {
					$result = $voter->create_votes($ress['id'], $numstand, $ress['email'], $ress['name']);
					redirect('?page=thankyou');
				} else {
					alert('Wrong Confirmation Code!!!');
					redirect('?page=confirm');
				}
				
				//alert('sukses!');
			} else {
				alert('Wrong Confirmation Code!!!');
				redirect('?page=confirm');
			}

			} else {
				alert('Wrong Confirmation Code!!!');
				redirect('?page=confirm');
			}



		} else {
			if(isset($_GET['confirm'])) {
				$cnfrmcode = urldecode($_GET['confirm']);
				//echo '<script>alert("' . $cnfrmcode . '")</script>';
				$rslt = $voter->check_from_link($cnfrmcode);

				if ($rslt > 0){
					$result = $voter->get_info($rslt);
					$resultss = $voter->create_votes($result['id'], $result['id_stand'], $result['email'], $result['name']);
					redirect('?page=thankyou');
				} else {
					if ($rslt == -666) {
						echo '<script>alert("Error Link Confirmation!!!")</script>';
						redirect('?page=confirm');
					} else {
						echo '<script>alert("Email has been confirmed!!!\nPlease select new stand to vote")</script>';
						redirect('./choose');
					}
				}
			}
		}
?>

