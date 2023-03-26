<?php
	// get the average and range from the textfields
	$test1 = floatval($_POST['test1']);
	$test2 = floatval($_POST['test2']);

	// calculations
	$total = $test1 + $test2;
  $average = $total / 2;
  $range = $test1 - $test2;
  $roundedAverage = round($average, 2);
  $roundedRange = (abs(round($range, 2)));
?>

<h3>Results:</h3>
Average is: <?php echo $roundedAverage ?>%.
Range is: <?php echo $roundedRange ?>.
