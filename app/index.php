<!DOCTYPE html>

<!-- Welcome in the source code! It's a bit empty here :) -->

<html lang="fr-FR">
	<head>
		<title>Abricot | Messager</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="https://theosenez.com/style.css">
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

	<body>
		<h2>hello!</h2>
		<p>Ton message du jour, porté par le Messager Abricot est:</p></br>
		<p><?php
function rand_line($fileName, $maxLineLength = 4096) {
    $handle = @fopen($fileName, "r");
    if ($handle) {
        $random_line = null;
        $line = null;
        $count = 0;
        while (($line = fgets($handle, $maxLineLength)) !== false) {
            $count++;
            // P(1/$count) probability of picking current line as random line
            if(rand() % $count == 0) {
              $random_line = $line;
            }
        }
        if (!feof($handle)) {
            echo "Error: unexpected fgets() fail\n";
            fclose($handle);
            return null;
        } else {
            fclose($handle);
        }
        return $random_line;
    }
}

// usage
echo rand_line("messages.txt");
?></p></br>
		<p>Les messages sont renouvelés souvent. Cependant, si tu l'as déjà lu, relance le tirage au sort en cliquant ici: <button onclick="document.location.reload(true);">🔄</button></p>
		<p>Participe à l'enrichissement de la banque de messages en <a href="https://forms.gle/rfcYk8NptHRgZFUk7">cliquant ici</a>. <?php include 'maj.php' ?></p>
