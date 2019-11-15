<<?php

$topo = array("Japan"=>"Tokyo", "Mexico"=>"Mexico City", "USA"=>"Washington D.C.", "India"=>"New Delhi", "Zuid-Korea"=>"Seoul", "China"=>"Peking", "Nigeria"=>"Abuja", "Argentina"=>"Buenos Aires", "Egypt"=>"Cairo", "UK"=>"London");

$count = 0;
	foreach ($topo as $key => $value) {
		echo "Welke hoofdstad heeft " . $key . "?\n";
		$answer = readline();
		if ($answer == $value){
			echo "Correct!\n";
			$count++;
		}
		else
			echo "Helaas, " . $answer . " is niet de hoofdstad van " . $key . ".\n";
	}
	echo "Je hebt " . $count . " van de 10 goed geraden!\n";
?>