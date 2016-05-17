<?php 
	define('KAMPRET', 'KAMPRET');
	//ini_set(session.save_path, getcwd() . "../tmp");
    ini_set('display_errors', 1);
    //ini_set('session.gc_maxlifetime', 1800);
    //session_set_cookie_params(1800);
    session_start();

    require_once "./apps/config.php";
    require_once "./apps/database.php";
    require_once "./apps/utility.php";

    $page = 'login';
    if(isset($_GET['page'])) {
    	    if (isset($_SESSION['user']) ) {
    	    	$page = $_GET['page'];
    	    } else {
    	    	redirect('./');
    	    }
    } else {
    	if(isset($_SESSION['user'])){
    		$user = $_SESSION['user'];
    		$nama = $_SESSION['nama'];
    		$page = 'chart-total';
    	} else {
    		$page = 'login';
    	}
    }
    
    switch ($page) {
    	case 'chart-daily-online':
    		require_once './apps/Carbon-master/src/Carbon/Carbon.php';
			require_once './apps/charts/src/Lavacharts.php';
			require_once "./model/Team.php";
			require_once "./model/Vote.php";
			$team_db = new DBTeam();
			$vote_db = new DBVote();
			
			$teams = $team_db->get_all();
			//Use Khill\Lavacharts\Lavacharts;
			$lava = new \Khill\Lavacharts\Lavacharts;
			//$lava = new Lavacharts; // See note below for Laravel
			$finances = $lava->DataTable();
			$finances->addDateColumn('Date');
			foreach ($teams as $team) {
				$finances->addNumberColumn($team['nama']);
			}
			foreach (range(4,8) as $day ) {
				$dates = "2016-05-" . $day;
				$stands1 = $vote_db->get_vote_daily_count(1, $dates);
				$stands2 = $vote_db->get_vote_daily_count(2, $dates);
				$stands3 = $vote_db->get_vote_daily_count(3, $dates);
				$stands4 = $vote_db->get_vote_daily_count(4, $dates);
				$stands5 = $vote_db->get_vote_daily_count(5, $dates);
				$stands6 = $vote_db->get_vote_daily_count(6, $dates);
				$stands7 = $vote_db->get_vote_daily_count(7, $dates);
				$stands8 = $vote_db->get_vote_daily_count(8, $dates);
				$stands9 = $vote_db->get_vote_daily_count(9, $dates);
				$stands10 = $vote_db->get_vote_daily_count(10, $dates);
				$stands11 = $vote_db->get_vote_daily_count(11, $dates);
				$stands12 = $vote_db->get_vote_daily_count(12, $dates);
				$stands13 = $vote_db->get_vote_daily_count(13, $dates);
				$stands14 = $vote_db->get_vote_daily_count(14, $dates);
				$finances->addRow([$dates, $stands1, $stands2, $stands3, $stands4, $stands5, $stands6, $stands7, $stands8, $stands9, $stands10, $stands11, $stands12, $stands13, $stands14 ]);
			}

			$lava->ColumnChart('Finances', $finances, [
			    'title' => 'Voting Daily Online',
			    'titleTextStyle' => [
			        'color'    => '#eb6b2c',
			        'fontSize' => 14
			    ],
			    'height' => '495'
			]);
    		break;
    	case 'chart-daily-offline':
    		require_once './apps/Carbon-master/src/Carbon/Carbon.php';
			require_once './apps/charts/src/Lavacharts.php';
			require_once "./model/Team.php";
			require_once "./model/Vote.php";
			$team_db = new DBTeam();
			$vote_db = new DBVote();
			
			$teams = $team_db->get_all();
			//Use Khill\Lavacharts\Lavacharts;
			$lava = new \Khill\Lavacharts\Lavacharts;
			//$lava = new Lavacharts; // See note below for Laravel
			$finances = $lava->DataTable();
			$finances->addDateColumn('Date');
			foreach ($teams as $team) {
				$finances->addNumberColumn($team['nama']);
			}
			foreach (range(4,8) as $day ) {
				$dates = "2016-05-" . $day;
				$stands1 = $vote_db->get_vote_daily_count_offline(1, $dates);
				$stands2 = $vote_db->get_vote_daily_count_offline(2, $dates);
				$stands3 = $vote_db->get_vote_daily_count_offline(3, $dates);
				$stands4 = $vote_db->get_vote_daily_count_offline(4, $dates);
				$stands5 = $vote_db->get_vote_daily_count_offline(5, $dates);
				$stands6 = $vote_db->get_vote_daily_count_offline(6, $dates);
				$stands7 = $vote_db->get_vote_daily_count_offline(7, $dates);
				$stands8 = $vote_db->get_vote_daily_count_offline(8, $dates);
				$stands9 = $vote_db->get_vote_daily_count_offline(9, $dates);
				$stands10 = $vote_db->get_vote_daily_count_offline(10, $dates);
				$stands11 = $vote_db->get_vote_daily_count_offline(11, $dates);
				$stands12 = $vote_db->get_vote_daily_count_offline(12, $dates);
				$stands13 = $vote_db->get_vote_daily_count_offline(13, $dates);
				$stands14 = $vote_db->get_vote_daily_count_offline(14, $dates);
				$finances->addRow([$dates, $stands1, $stands2, $stands3, $stands4, $stands5, $stands6, $stands7, $stands8, $stands9, $stands10, $stands11, $stands12, $stands13, $stands14 ]);
			}

			$lava->ColumnChart('Finances', $finances, [
			    'title' => 'Voting Daily Offline',
			    'titleTextStyle' => [
			        'color'    => '#eb6b2c',
			        'fontSize' => 14
			    ],
			    'height' => '495'
			]);
    		break;
    	case 'chart-daily-total':
    		require_once './apps/Carbon-master/src/Carbon/Carbon.php';
			require_once './apps/charts/src/Lavacharts.php';
			require_once "./model/Team.php";
			require_once "./model/Vote.php";
			$team_db = new DBTeam();
			$vote_db = new DBVote();
			
			$teams = $team_db->get_all();
			//Use Khill\Lavacharts\Lavacharts;
			$lava = new \Khill\Lavacharts\Lavacharts;
			//$lava = new Lavacharts; // See note below for Laravel
			$finances = $lava->DataTable();
			$finances->addDateColumn('Date');
			foreach ($teams as $team) {
				$finances->addNumberColumn($team['nama']);
			}
			foreach (range(4,8) as $day ) {
				$dates = "2016-05-" . $day;
				$stands1 = $vote_db->get_vote_daily_count_total(1, $dates);
				$stands2 = $vote_db->get_vote_daily_count_total(2, $dates);
				$stands3 = $vote_db->get_vote_daily_count_total(3, $dates);
				$stands4 = $vote_db->get_vote_daily_count_total(4, $dates);
				$stands5 = $vote_db->get_vote_daily_count_total(5, $dates);
				$stands6 = $vote_db->get_vote_daily_count_total(6, $dates);
				$stands7 = $vote_db->get_vote_daily_count_total(7, $dates);
				$stands8 = $vote_db->get_vote_daily_count_total(8, $dates);
				$stands9 = $vote_db->get_vote_daily_count_total(9, $dates);
				$stands10 = $vote_db->get_vote_daily_count_total(10, $dates);
				$stands11 = $vote_db->get_vote_daily_count_total(11, $dates);
				$stands12 = $vote_db->get_vote_daily_count_total(12, $dates);
				$stands13 = $vote_db->get_vote_daily_count_total(13, $dates);
				$stands14 = $vote_db->get_vote_daily_count_total(14, $dates);
				$finances->addRow([$dates, $stands1, $stands2, $stands3, $stands4, $stands5, $stands6, $stands7, $stands8, $stands9, $stands10, $stands11, $stands12, $stands13, $stands14 ]);
			}

			$lava->ColumnChart('Finances', $finances, [
			    'title' => 'Voting Daily Total Summary',
			    'titleTextStyle' => [
			        'color'    => '#eb6b2c',
			        'fontSize' => 14
			    ],
			    'height' => '495'
			]);
    		break;
    	case 'chart-total-online':
    		require_once "./model/Team.php";
			require_once "./model/Vote.php";
			$team_db = new DBTeam();
			$vote_db = new DBVote();
			
			$teams = $team_db->get_all();
    		break;
    	case 'chart-total-offline':
    		require_once "./model/Team.php";
			require_once "./model/Vote.php";
			$team_db = new DBTeam();
			$vote_db = new DBVote();
			
			$teams = $team_db->get_all();
    		break;
    	case 'chart-total':
    		require_once "./model/Team.php";
			require_once "./model/Vote.php";
			$team_db = new DBTeam();
			$vote_db = new DBVote();
			
			$teams = $team_db->get_all();
    		break;
    	default:
    		require_once './controller/login.php';
    		break;
    }

    


    
?>
<!DOCTYPE html>
<html lang="en">
<!-- CODE BY @LeoPisanGG on Twitter.com !-->
	<head>
    	<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content=""/>
        <meta name="author" context=""/>
        <link rel="shortcut icon" href="http://static.wixstatic.com/media/fbd849_badfa26e07fb44e3baac50c9a4226a1a.png/v1/fill/w_16%2Ch_16%2Clg_1/fbd849_badfa26e07fb44e3baac50c9a4226a1a.png" type="image/png"/>
		<link rel="apple-touch-icon" href="http://static.wixstatic.com/media/fbd849_badfa26e07fb44e3baac50c9a4226a1a.png/v1/fill/w_16%2Ch_16%2Clg_1/fbd849_badfa26e07fb44e3baac50c9a4226a1a.png" type="image/png"/>
        <title><?php echo $config['site']['title']; ?></title>
        <link href="../style/css/secret-chamber.css" rel="stylesheet">
        <link href="../style/css/bootstrap.min.css" rel="stylesheet">
        <link href="./style/css/footer.css" rel="stylesheet">
        <link href="./style/css/footer-mobile.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="../style/js/bootstrap-custom.js"></script>
	<?php

        switch ($page) {
	    	case 'chart-daily-online':
	    		break;
	    	case 'chart-daily-offline':
	    		break;
	    	case 'chart-daily-total':
	    		break;
	    	case 'chart-total-online':
	    		echo "<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
		<script type='text/javascript'>
			google.charts.load('current', {'packages':['corechart']});

			google.charts.setOnLoadCallback(drawChart);

			function drawChart() {
			var data = google.visualization.arrayToDataTable([
					['Team', 'Votes', { role: 'style' }],";
				foreach ($teams as $team) {
					echo "['" . $team['nama'] . "', " . $vote_db->get_vote_count($team['id']) . ", '" . $team['color'] . "' ],";
				}
				echo "]);
					var options = {
						'title':'Total Voting Online Result',
						'height':'500',
						'legend':'none',
						axes: {
		            x: {
		              0: { side: 'top', label: 'Percentage'}
		            }
		          },
					};
					var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
						chart.draw(data, options);
					}
				</script>";
	    		break;
	    	case 'chart-total-offline':
	    		echo "<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
		<script type='text/javascript'>
			google.charts.load('current', {'packages':['corechart']});

			google.charts.setOnLoadCallback(drawChart);

			function drawChart() {
			var data = google.visualization.arrayToDataTable([
					['Team', 'Votes', { role: 'style' }],";
				foreach ($teams as $team) {
					echo "['" . $team['nama'] . "', " . $vote_db->get_vote_count_offline($team['id']) . ", '" . $team['color'] . "' ],";
				}
				echo "]);
					var options = {
						'title':'Total Voting Offline Result',
						'height':'500',
						'legend':'none',
						axes: {
		            x: {
		              0: { side: 'top', label: 'Percentage'}
		            }
		          },
					};
					var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
						chart.draw(data, options);
					}
				</script>";
	    		break;
	    	case 'chart-total':
	    		echo "<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
		<script type='text/javascript'>
			google.charts.load('current', {packages: ['corechart', 'bar']});
			google.charts.setOnLoadCallback(drawStacked);
			function drawStacked() {
			var data = google.visualization.arrayToDataTable([
					['Team', 'Votes Offline', 'Votes Online', { role: 'annotation' }],";
				foreach ($teams as $team) {
					$result = $vote_db->get_vote_count_total($team['id']);
					$total = $result['offline'] + $result['online'];
					echo "['" . $team['nama'] . "', " . $result['offline'] . ", " . $result['online'] . ", 'Total = " . $total ."' ],";
				}
				echo "]);

					var options = {
						'title':'Total Voting Result Summary',
						'height':'500',
						chartArea: {width: '50%'},
						'legend':'none',
						'isStacked': 'true',
						hAxis: {
				          title: 'Votes',
				          minValue: 0,
				        },
				        vAxis: {
				          title: 'Stand'
				        },
						'series': {
					    0:{color:'#d5d5c3'},
					    1:{color:'#2eb82e'},
					  }
					};
					var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
						chart.draw(data, options);
					}
				</script>";
	    		break;
	    	default:
	    		break;
    	}
    ?>

    </head>
    <!-- CODE BY @LeoPisanGG on Twitter.com !-->
	<body>
		<div class="wrapper">
		<?php
			switch ($page) {
		    	case 'chart-daily-online':
		    		require_once './view/navbar.php';
		    		require_once './view/chart-daily-online.php';
		    		break;
		    	case 'chart-daily-offline':
		    		require_once './view/navbar.php';
		    		require_once './view/chart-daily-online.php';
		    		break;
		    	case 'chart-daily-total':
		    		require_once './view/navbar.php';
		    		require_once './view/chart-daily-online.php';
		    		break;
		    	case 'chart-total-online':
		    		require_once './view/navbar.php';
		    		echo '<div id="chart_div"></div>';
		    		break;
		    	case 'chart-total-offline':
		    		require_once './view/navbar.php';
		    		echo '<div id="chart_div"></div>';
		    		break;
		    	case 'chart-total':
		    		require_once './view/navbar.php';
		    		echo '<div id="chart_div"></div>';
		    		break;

		    	default:
		    		require_once './view/login.php';
		    		break;
		   	}
		?>
			<div class="push"></div>
		</div>

		
		<div class="footer">
	        <div class="footer-bottom" align="center">
		        <span align="left" class="logo-fti">
		        	<a href="http://untar.ac.id/fti/"><img class="preload-me retinized" width="113" height="43" alt="UNTAR" src="../img/logofti.png"></a>  
		        </span>
		        <span class = "footer-word">
		        	©2016 UNTAR Entrepreneur Week .All Right Reserved | Web Development By 535130084-Leonardo Cahaya. 
		        </span>
	        </div>
    	</div>
    	
	</body>
	<!-- CODE BY @LeoPisanGG on Twitter.com !-->
</html>