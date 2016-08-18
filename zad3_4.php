<?php

if (preg_match ( "/((?:[A-Z]\.|[^\.!?])+)[\.!?]/", "Rising sun.", $matches )) {
	
	echo "Match was found! :) ";
	// print_r( $matches);
	
} else {
	echo "No match! :(";
}
?>