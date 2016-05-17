<?php
	if (!defined('KAMPRET')) die('<h1 class="try-hack">Restricted access!</h1>');

	class DBVote extends Database {

		function get_vote_count($id) {
			$this->check_connection();
			$query = 'SELECT count(id) as "tot" FROM snti16_voteew2016.voters WHERE id_stand ="' . $id .'"';
			$result = $this->query($query);

			if($result->num_rows > 0) {
				$ress = mysqli_fetch_array($result);
				return $ress['tot'];
			} else {
				return 0;
			} 
		}

		function get_vote_count_offline($id) {
			$this->check_connection();
			$query = 'SELECT count(id) as "tot" FROM snti16_voteew2016.tb_vote WHERE id_team ="' . $id .'"';
			$result = $this->query($query);

			if($result->num_rows > 0) {
				$ress = mysqli_fetch_array($result);
				return $ress['tot'];
			} else {
				return 0;
			} 
		}

		function get_vote_count_total($id) {
			$this->check_connection();
			$hasilonline = $this->get_vote_count($id);
			$hasiloffline = $this->get_vote_count_offline($id);
			//$total = $hasilonline + $hasiloffline;
			$total = $arrayName = array('online' => $hasilonline , 'offline' => $hasiloffline );
			return $total;
		}

		function get_vote_daily_count($id, $dates) {
			$this->check_connection();
			$query = "SELECT count(id) as 'tot' FROM snti16_voteew2016.voters WHERE DATE_FORMAT(date,'%Y-%m-%e') = '" . $dates . "' AND id_stand = '" . $id . "'" ;
			$result = $this->query($query);

			if($result->num_rows > 0) {
				$ress = mysqli_fetch_array($result);
				return $ress['tot'];
			} else {
				return 0;
			}
		}

		function get_vote_daily_count_offline($id, $dates) {
			$this->check_connection();
			$query = "SELECT count(id) as 'tot' FROM snti16_voteew2016.tb_vote WHERE DATE_FORMAT(created_on,'%Y-%m-%e') = '" . $dates . "' AND id_team = '" . $id . "'" ;
			$result = $this->query($query);

			if($result->num_rows > 0) {
				$ress = mysqli_fetch_array($result);
				return $ress['tot'];
			} else {
				return 0;
			}
		}


		function get_vote_daily_count_total($id, $dates) {
			$this->check_connection();
			// Count offline
			$hasiloffline = $this->get_vote_daily_count_offline($id, $dates);
			//Count online
			$hasilonline = $this->get_vote_daily_count($id, $dates);
			//Total count
			$hasil = $hasiloffline + $hasilonline;

			return $hasil;
		}

		
	}

?>