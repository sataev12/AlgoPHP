<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la forme : </p>

<h2>Résultat</h2>

<?php

$table = array();



foreach (range(1,10) as $nbMulticplication) {
    $result = $nbMulticplication * 8;
    
    $table[] = "$nbMulticplication * 8 = $result";
}

foreach ($table as $lesLignes) {
    echo $lesLignes."<br>";
}





echo "----------------------2eme solutions---------------------<br>";

$nombre= 9;


for ($i=1; $i < 10 ; $i++) { 
    echo "$i * $nombre = ". ($i*$nombre). "<br>";
}
