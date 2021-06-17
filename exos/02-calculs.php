<?php

require dirname(__DIR__).'/inc/functions.php';

// ---- Calculs ----
// fiche récap : https://kourou.oclock.io/ressources/fiche-recap/la-syntaxe-php/#arithm%c3%a9tique

/* -----------------------------------
LE COMPTE EST BON !!!
a) En utilisant uniquement les variables suivantes, créer une variable "calculA" ayant la valeur CALCULEE suivante :
    73
*/
$a = 10;
$b = 5;
$c = 7;
$d = 2;
// TON CODE ICI

$calculA= $c*$a +($b-$d);


// FIN DE TON CODE
displayExo('calculs-a');
$aOk = checkVariableValue(array('calculA' => 73));

/* -----------------------------------
b) En utilisant uniquement les variables suivantes, créer une variable "calculB" ayant la valeur CALCULEE suivante :
    37
*/
$a = 5;
$b = 2;
$c = 3;
$d = 4;
// TON CODE ICI
$calculB=($d*$b*$a)-$c;


// FIN DE TON CODE
if (isset($aOk) && $aOk) {
    displayExo('calculs-b');
    $bOk = checkVariableValue(array('calculB' => 37));
}

/* -----------------------------------
c) En utilisant uniquement les variables suivantes, créer une variable "calculC" ayant la valeur CALCULEE suivante :
    26
*/
$a = 5;
$b = 8;
$c = 3;
$d = 9;
// TON CODE ICI
$calculC=(($a-$c)*$d)+$b;


// FIN DE TON CODE
if (isset($bOk) && $bOk) {
    displayExo('calculs-c');
    $cOk = checkVariableValue(array('calculC' => 26));
    displayEnd($cOk);
}
