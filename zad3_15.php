<?php

$search = "SELECT * from table;";

if (preg_match_all ( '/^([s|S][e|E][l|L][e|E][c|C][t|T])\s([a-zA-Z0-9\-_]+|\*),?([a-zA-Z0-9\-_]+)*\s([f|F][r|R][o|O][m|M])\s([a-zA-Z0-9\-_]+),?([a-zA-Z0-9\-_]+)*(.*);$/', $search, $matches )) {
	echo "Match was found! :) ";
} else {
	echo "No match! :(";
}

foreach ( $matches [0] as $tag ) {
	echo $tag;
}