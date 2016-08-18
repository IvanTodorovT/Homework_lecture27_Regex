<?php


$search = "blalal ddas Ivan dadsnadas Ivan dajdasndas Ivvna";

if (preg_match_all ( '/ Ivan /', $search, $matches )) {
	echo "Match was found! :) ";
} else {
	echo "No match! :(";
}

foreach ( $matches [0] as $tag ) {
	echo $tag;
}