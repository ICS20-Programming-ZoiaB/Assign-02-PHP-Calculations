<?php
	// get the average and range from the textfields
	$test1 = floatval($_POST['test1']);
	$test2 = floatval($_POST['test2']);

	// calculations
	$total = $test1+$test2;
  $average = $total/2;
  $range = $test1-$test2
?>

<h3>Results:</h3>
Average is: <?php echo round("$average", 2) ?>%.
Range is: <?php echo (abs(round("$range", 2))) ?>.