<?php
$numbers = <<<EOT
	Ivan - 0899 11-22-33
	Georgi - 0888 11-22-33
	Peter - 0878123456
	Evdokia - 0888/123 456
	John - 0298 293 304
EOT;

preg_match_all('@([a-z]+)\s+\-\s+(08[7-9][0-9](\s*|/)([0-9](\s*|\-*)){6})@i', $numbers, $matches);

foreach ($matches[1] as $key => $value) {
	echo $value, ' tel. ', $matches[2][$key], PHP_EOL;
}