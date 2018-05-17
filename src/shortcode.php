<div class="jf_daily_counter_shortcode">
	<?php 

		$now = time(); // today
		$your_date = strtotime("2018-05-16");
		$datediff = $now - $your_date;
		$addition = round($datediff / (60 * 60 * 24) - 1);

		$arrayAdditions = (string)100000 + $addition;
		$arrayAdditions = str_split($arrayAdditions);

	?>
	<ul>
		<?php foreach( $arrayAdditions as $numberAddition ): ?>
			<li><?php echo $numberAddition ?></li>
		<?php endforeach; ?>
	</ul>
</div>