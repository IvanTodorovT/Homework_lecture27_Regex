<?php

$search ="�� 5467 �� ";

if (preg_match_all ( "/�� [0-9][0-9][0-9][0-9] [�-�][�-�]/", $search, $matches )) {
	echo "Match was found! :) ";
} else {
	echo "No match! :(";
}

foreach ( $matches [0] as $tag ) {
	echo $tag;
}