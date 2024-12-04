<?php

$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

echo(count($dico)." mots dans le dicogui.");

echo "<br><br>";

$count = 0;

foreach ($dico as $dicovalue){
    $dicovalue = trim($dicovalue);
    if (strlen($dicovalue) == 15){
        $count += 1;
    };
};

echo "Le nombre de mots de plus de 15 lettres est de {$count}.";

echo "<br><br>";

$count2 = 0 ;

foreach ($dico as $dicovalue){
    $dicovalue = trim($dicovalue);
    if (str_contains($dicovalue,"w") || str_contains($dicovalue,"W")){
        $count2 += 1;
    };
};

echo "Le nombre de mots contenant la lettre W est de {$count2}.";

echo "<br><br>";

$compteur3 = 0;

foreach($dico as $lettreQ){
    $lettreQ = trim($lettreQ);
    if(substr($lettreQ, -1) == "q" || substr($lettreQ, -1) == "Q" ){
        $compteur3 += 1;
    }
}
echo "Le nombre de mots contenant la lettre W est de {$compteur3}.";
