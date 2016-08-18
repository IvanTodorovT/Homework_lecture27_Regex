<?php

$search ="CT 5467 AM ";

if (preg_match_all ( "/CT [0-9][0-9][0-9][0-9] [A-Z][A-Z]/", $search, $matches )) {
	echo "Match was found! :) ";
} else {
	echo "No match! :(";
}

foreach ( $matches [0] as $tag ) {
	echo $tag;
}