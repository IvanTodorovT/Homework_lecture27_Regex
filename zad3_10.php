<?php

$search ="ivan@gmail.com";

if (preg_match_all ( '/^[a-z0-9]+(?!.*(?:\+{2,}|\-{2,}|\.{2,}))(?:[\.+\-]{0,1}[a-z0-9])*@gmail\.com$/', $search, $matches )) {
	echo "Match was found! :) ";
} else {
	echo "No match! :(";
}

foreach ( $matches [0] as $tag ) {
	echo $tag;
}