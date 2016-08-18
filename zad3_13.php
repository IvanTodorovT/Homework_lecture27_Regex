<?php

$search = ".myClass{)";

if (preg_match_all ( '/(\w+)?(\s*>\s*)?(#\w+)?\s*(\.\w+)?\s*{/', $search, $matches )) {
	echo "Match was found! :) ";
} else {
	echo "No match! :(";
}

foreach ( $matches [0] as $tag ) {
	echo $tag;
}