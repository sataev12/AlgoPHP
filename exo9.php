<h1>Exercice 9</h1>

<p>Si la personne est une femme dont lâge est compris entre 18 et 35 ans ou si c'est un homme de plus de 20 ans, alors celle-ci est imposable<br>
(sinon ce n'est pas le cas, "non imposable")</p>

<h2>Résultat</h2>

<?php

$age = 32;
$sexe = "F";
$sexeF = "F";
$sexeM = "M";

echo "Age : $age<br>";
echo "Sexe : $sexe<br>"; 


if($sexe === $sexeF || $sexe === $sexeM) {
    switch (true) {
        case ($age>=18 && $age<=35) && ($sexe === $sexeF): echo "La personne est imposable"; break;
        case ($age>20) && ($sexe === $sexeM): echo "La personne est imposable"; break;
        
        
        default: echo "non imposable"; break;
    }
}


