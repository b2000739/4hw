<?php
$sum = 0;
$massive = array(-2, -4, 5, 4, 5, -7);
for ($i = 0; $i < count($massive); $i++) {
	if ($massive[$i] < 0 and $massive[$i] % 2 == 0) {
		$sum += $massive[$i];
	}
}
echo $sum;
