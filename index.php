<?php

$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

echo(count($dico));

echo "<br><br>";

foreach ($dico as $dicokey => $dicovalue);

