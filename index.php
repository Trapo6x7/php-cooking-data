<?php

echo "<h2> DICTIONNAIRE </h2>";

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

echo "<br><br>";

echo "<h2> LISTE DE FILMS </h2>";

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films


foreach($top as $key => $film){
    // $film = trim($film);
    echo ($key + 1) . " ". trim($film['im:name']['label']) ;

    echo "<br>";
    if($key >= 9){
        break;
    }
}

echo "<br><br>";

foreach ($top as $key => $films){

    // $films = trim($films['im:name']['label']);

    if ($films["im:name"]['label'] === "Gravity" ){
        echo $key ;
    };
};