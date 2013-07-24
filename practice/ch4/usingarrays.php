<?php 

	// creating an array
	
	$rates = array();
	
	for( $i = 0 ; $i < 10 ; $i++) {
		$rates[$i] = $i + 1;
	}
	
	echo count($rates);
	
	//
	$rates['My_Name'] = 'Erik';
	
	echo '<br />' . $rates["My_Name"];
	
	// foreach through regular array
	foreach($rates as $rate){
		echo '<br/>' . $rate;
	}
	
	//foreach through string index array displays index and value
	foreach($rates as $index=>$rate){
		echo '<br/>' . $index . " " . $rate;
	}
	
?>