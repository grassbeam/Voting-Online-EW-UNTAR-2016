<?php
	$config['baseurl'] = __DIR__ . '/vote.php';
	if (!defined('BASE')) die('<h1 class="try-hack">Restricted access!</h1>');


?>
<!-- CODE BY @LeoPisanGG on Twitter.com !-->
<?php 
    // Any mobile device (phones or tablets).
    if ( $detek->isMobile() || $detek->isTablet() ) {
        require_once('./view/navbar-mobile.php'); 
    } else {
        require_once('./view/navbar-normal.php'); 
    }
    $nomorstands = $_SESSION['numstand'];
                switch ($nomorstands) {
                    case '1':
                        $namastand = 'KRIBCORN';
                        break;
                    case '2':
                        $namastand = 'ARS LIGNA';
                        break;
                    case '3':
                        $namastand = 'SPASIA';
                        break;
                    case '4':
                        $namastand = 'KROBI';
                        break;
                    case '5':
                        $namastand = 'BOCIL';
                        break;
                    case '6':
                        $namastand = 'B.A.Q';
                        break;
                    case '7':
                        $namastand = 'SUSHIBAN';
                        break;
                    case '8':
                        $namastand = 'CHEESE PONG';
                        break;
                    case '9':
                        $namastand = 'WARUNG ES BATAVIA';
                        break;
                    case '10':
                        $namastand = 'POTACO';
                        break;
                    case '11':
                        $namastand = 'NAKAL';
                        break;
                    case '12':
                        $namastand = 'MAGAZA';
                        break;
                    case '13':
                        $namastand = 'SIR CHICK';
                        break;
                    case '14':
                        $namastand = 'SANDWITCH';
                        break;
                    default:
                        $namastand = 'Website';
                        break;
                }
    
?>
<div class="container">
	<form class="form-signin" method="post" action=".">
        <?php
            if ( $detek->isMobile() || $detek->isTablet() ) {
                echo '<h4 align="center">Voting ' . $namastand . '</h4>';
            } else {
                echo '<h2 align="center">Voting ' . $namastand . '</h2>';
            } 
        ?>
        <label for="inputEmail" class="sr-only">Email Address:</label>
    	<input type="text" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required/>
    	<label for="inputNama" class="sr-only">Nama:</label>
        <input type="text" id="inputNama" name="inputNama" class="form-control" placeholder="Nama" required/>
        <div class="g-recaptcha" align="center" width="360" data-sitekey="6Lcq-B4TAAAAAMfVKrPXhDdbtdYTqQPsU69sfwVI" style="padding-bottom: 15px;"></div>

        <?php
            if ( $detek->isMobile() || $detek->isTablet() ) {
                echo '<button class="btn btn-lg btn-danger btn-block" name="vote" type="submit" style="padding-top: 10px;">VOTE!</button>';
            } else {
                echo '<button class="btn btn-lg btn-danger btn-block" name="vote" type="submit">VOTE!</button>';
            } 
        ?>

        
	</form>

    <?php
            if ( $detek->isMobile() || $detek->isTablet() ) {
                echo '<h4 align="center" style="padding-top: -20px;">Or Vote Using...</h4>';
            } else {
                echo '<h3 align="center" style="padding-top: -20px;">Or Vote Using...</h3>';
            } 
    ?>
	
	<a class="btn btn-block btn-lg btn-social btn-facebook btn-sns1" id="btn-sns1" align="center">
    	<span class="fa fa-facebook"></span> Vote with Facebook
    </a>

	<!--<a class ="btn btn-lg btn-block btn-social btn-google btn-sns2" align="center">
		<span class="fa fa-google"></span> Vote with Google+
    </a>!-->

</div>