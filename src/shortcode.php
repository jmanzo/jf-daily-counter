<div class="jf_daily_counter_shortcode">
	<?php

		$fromDate = isset(get_option( 'jfdc_options' )['jfdc_date_counter']) ? get_option( 'jfdc_options' )['jfdc_date_counter'] : '2018-01-01';
		$defaultQuantity = isset(get_option( 'jfdc_options' )['jdfc_quantity']) ? get_option( 'jfdc_options' )['jdfc_quantity'] : '1000';

		$now = time(); // today
		$your_date = strtotime( $fromDate );
		$datediff = $now - $your_date;
		$addition = round($datediff / (60 * 60 * 24) - 1);

		$arrayAdditions = (string)$defaultQuantity + $addition;
		$arrayAdditions = str_split($arrayAdditions);

	?>
	<ul>
		<?php foreach( $arrayAdditions as $numberAddition ): ?>
			<li><?php echo $numberAddition ?></li>
		<?php endforeach; ?>
	</ul>
</div>