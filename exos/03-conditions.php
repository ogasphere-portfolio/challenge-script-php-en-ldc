<?php

require dirname(__DIR__).'/inc/functions.php';

// ---- Conditions ----
// fiche récap : https://kourou.oclock.io/ressources/fiche-recap/les-conditions/

// On détermine un nombre aléatoire comme âge pour l'exécution de ce script
// A chaque exécution, $age devrait avoir une nouvelle valeur
$age = mt_rand(1,40);

echo PHP_EOL.'|---- $age = '.$age.' ----|'.PHP_EOL;

/* -----------------------------------
a) On souhaite savoir si une personne est adulte ou non
$age contient un age aléatoire compris en 1 et 40
$estAdulte est la variable à remplir, de type booléen (vrai/faux)
*/
$estAdulte = null; // null = aucune valeur d'aucun type

// TON CODE ICI

if ($age>=18) {
    $estAdulte=true;
}else {
    $estAdulte=false;
}

// FIN DE TON CODE
displayExo('conditions-a');
$aOk = checkVariableValue(array('estAdulte'=>($age>=18)));

/* -----------------------------------
b) Selon Wikipédia : "La Convention des droits de l'enfant des Nations Unies définit l'enfance comme la période allant de la naissance à 18 ans et l'adolescence comme la période allant de 10 à 19 ans"
En partant des informations de cette phrase, et à partir de la variable $age, remplir les valeurs (vrai/faux) dans les variables $estEnfant, $estAdolescent, $estAdulte.
Exécuter à plusieurs reprises le script afin de tester plusieurs "tranches" d'âge aléatoirement
*/
$estEnfant = null; // null = aucune valeur d'aucun type
$estAdolescent = null;
$estAdulte = null;

// TON CODE ICI

if ($age<=18) {
    $estEnfant =true;
    $estAdulte =false;
}
if ($age>19) {
    $estEnfant = false; 
    $estAdolescent = false;
    $estAdulte=true;
}
if ($age<=18 && $age>=10) {
    $estEnfant = true; 
    $estAdolescent = true;
    $estAdulte=false;
}elseif ($age==19) {
    $estEnfant = false; 
    $estAdolescent = true;
    $estAdulte=true;
}


// FIN DE TON CODE
if (isset($aOk) && $aOk) {
    displayExo('conditions-b');
    $bOk = checkVariableValue(array('estEnfant'=>$age<18, 'estAdolescent'=>$age>9&&$age<20, 'estAdulte'=>($age>=18)));

    displayEnd($bOk);
}

/* BONUS
-----------------------------------
=> direction le fichier 03-conditions-bonus.php !
*/