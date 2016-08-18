<?php

$search ="1222";

if (preg_match_all ( "/(^[1][0][0][0]$)|(^[1][0-6][0-9][0-9]$)/", $search, $matches )) {
	echo "Match was found! :) ";
} else {
	echo "No match! :(";
}

foreach ( $matches [0] as $tag ) {
	echo $tag;
}