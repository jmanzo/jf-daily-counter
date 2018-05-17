<div class="jf_daily_counter_shortcode">
	<?php 

		$now = time(); // or your date as well
		$your_date = strtotime("2010-01-01");
		$datediff = $now - $your_date;

		echo round($datediff / (60 * 60 * 24));

	?>
</div>