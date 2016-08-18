<?php

if (preg_match ( "/[a-zA-Z]ing/", "Rising sun", $matches )) {
	
	echo "Match was found! :) ";
	// print_r( $matches);
	
} else {
	echo "No match! :(";
}
?>