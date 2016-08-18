<?php

if (preg_match ( "/ [a-zA-Z] /", "123sffds deal ", $matches )) {
	
	echo "Match was found! :) ";
	// print_r( $matches);
	
} else {
	echo "No match! :(";
}
?>