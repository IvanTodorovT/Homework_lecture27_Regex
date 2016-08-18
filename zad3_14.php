<?php

$numbers = "while(true){}";

if (preg_match_all ( '/(^while|[ ;}\n]while)[ ]*([(]([^()]|(?2))*[)])/', $numbers, $matches )) {
	echo "Match was found! :) ";
} else {
	echo "No match! :(";
}

foreach ( $matches [0] as $tag ) {
	echo $tag;
}