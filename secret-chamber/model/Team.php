<?php
	if (!defined('KAMPRET')) die('<h1 class="try-hack">Restricted access!</h1>');

	class DBTeam extends Database {

		function get_all() {
			$this->check_connection();
			$query = "SELECT * FROM snti16_voteew2016.team ";
			$result = $this->query($query);

			if($result->num_rows > 0) {
				while($ress = mysqli_fetch_assoc($result)){
					$nress[] = $ress;
				}
				return $nress ;
			} else {
				return NULL;
			}
		}

		
	}

?>