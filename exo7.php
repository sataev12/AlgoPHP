<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge :<br>
Poussin: entre 6 et 7 ans<br>
Pupille: entre 8 et 9 ans<br>
Minime: entre 10 et 11 ans<br>
Cadet: à partir de 12 ans<br>
Si la catégorie n'est pas gérée, merci de le préciser</p>

<?php

$age = 6;

if ( 6<= $age && $age<=7 ) {
    $result = "Poussin";
}elseif(8<=$age && $age<=9) {
    $result = "Pupille";
}elseif(10<=$age && $age<=11) {
    $result = "Minime";
}elseif(11<$age && $age<12) {
    $result = "Cadet";
}else {
    echo "La catégorie n'est pas gérée";
}

echo "L'enfant qui a $age ans appartient à la catégorie $result";
