<?php

$search ="бв 5467 ЬЭ ";

if (preg_match_all ( "/бв [0-9][0-9][0-9][0-9] [Р-п][Р-п]/", $search, $matches )) {
	echo "Match was found! :) ";
} else {
	echo "No match! :(";
}

foreach ( $matches [0] as $tag ) {
	echo $tag;
}