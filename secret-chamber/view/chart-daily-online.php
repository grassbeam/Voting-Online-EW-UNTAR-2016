<?php
	if (!defined('KAMPRET')) die('<h1 class="try-hack">Restricted access!</h1>');

?>

<div id="perf_div"></div>
<?= $lava->render('ColumnChart', 'Finances', 'perf_div') ?>