<?php

$filename = 'messages.txt';

if (file_exists($filename)) {
	setlocale(LC_TIME, "fr_FR");
	echo "<strong>Dernière mise à jour le " . strftime("%d %B à %kh%M.", filemtime($filename));
}
?>
