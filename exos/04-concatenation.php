<?php

require dirname(__DIR__).'/inc/functions.php';

// ---- Concaténation ----
// fiche récap : https://kourou.oclock.io/ressources/fiche-recap/la-syntaxe-php/#concat%c3%a9nation
// Conseil : attention aux espaces, aux virgules (,) et aux points (.) !

/* -----------------------------------
a) En utilisant les variables suivantes, créer une 3ème variable "bestVideoGames1" qui contiendra la chaîne de caractères suivantes :
    les meilleures portables sont GameBoy, GameGear, PSP.
*/
$videoGamesPortable = 'GameBoy, GameGear, PSP';
$videoGames = 'SuperNintendo, MegaDrive, Playstation';
// TON CODE ICI



// FIN DE TON CODE
displayExo('concatenation-a');
$aok = checkVariableValue(array('bestVideoGames1' => 'les meilleures portables sont GameBoy, GameGear, PSP.'));

/* -----------------------------------
b) En utilisant les variables définies, créer une 4ème variable "bestVideoGames2" qui contiendra la chaîne de caractères suivantes :
    Les meilleures consoles de jeux sont SuperNintendo, MegaDrive, Playstation
*/
// TON CODE ICI



// FIN DE TON CODE
if (isset($aok) && $aok) {
    displayExo('concatenation-b');
    $bOk = checkVariableValue(array('bestVideoGames2' => 'Les meilleures consoles de jeux sont SuperNintendo, MegaDrive, Playstation'));
}

/* -----------------------------------
c) En utilisant les variables que tu as créées dans a) et b), ajouter du contenu à la variable "bestVideoGames2" existante, pour obtenir la chaîne de caractères suivante :
    Les meilleures consoles de jeux sont SuperNintendo, MegaDrive, Playstation, et les meilleures portables sont GameBoy, GameGear, PSP.
*/
// TON CODE ICI



// FIN DE TON CODE
if (isset($aok) && isset($bOk) && $aok && $bOk) {
    displayExo('concatenation-c');
    $cOk = checkVariableValue(array('bestVideoGames2' => 'Les meilleures consoles de jeux sont SuperNintendo, MegaDrive, Playstation, et les meilleures portables sont GameBoy, GameGear, PSP.'));
    displayEnd($cOk);
}
