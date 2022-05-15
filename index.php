<?php
// Declare function to calculate check
function priceCheck($productsPrices) {
	$sum = 0;

	$products = $productsPrices;

	$sale = [];

	foreach($productsPrices as $key => $value) {
		if (preg_match('/[.99]$/', $value)){
			$sale[] = $value;
		} else {
			$sum += $value;
		}
	}
	
	if (count($sale) > 3) {
		return $sum + max($sale);
	} else {
		return array_sum($products);
	}	
}

var_dump(priceCheck([100, 100, 100.99, 100.99, 150.99, 299.99, 3.10]));

