<?php

$search = "<div></div>";
if (preg_match_all ( '/\<(\w+)(?:\s*\>|\s*\/\>)?/', $search, $matches )) {
	echo "Match was found! :) ";
} else {
	echo "No match! :(";
}

foreach ( $matches [0] as $tag ) {
	echo $tag;
}