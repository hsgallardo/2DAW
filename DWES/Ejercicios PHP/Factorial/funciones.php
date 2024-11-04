<?php
	function factorial(&$total, $i){
		for ($j=1; $j<=$i ; $j++) { 
			$total=$total*$j;
		}
	}
?>