<?php
echo '<a href="tp.php">&larr; Retour</a><br><br>';

/**
 * - Stockez deux valeurs numériques différentes
 * - Affichez le type des deux variables
 * - Créez une fonction qui prend un entier en paramètre
 * - Tipez le retour de cette fonction pour retourner un entier
 * - Appelez cette fonction tant que vos deux variables ne sont pas égales
 * - Affichez le contenu des deux variables à chaque étape.
 * - Créez et affichez un tableau avec deux fruits et trois légumes. *
 */

$a = 10;
$b = 20;

function increment (int $value) : int {
    return ++$value;
}

//do{
//    $a = increment($a);
//    echo $a;
//    echo '<br>';
//}while ($a < $b);

while ($a < $b) {
    $a = increment($a);
    echo $a;
    echo '<br>';
}

//$max = $b - $a;
//for ($i = 0; $i < $max; $i++) {
//    $a = increment($a);
//    echo $a;
//    echo '<br>';
//}

echo '<br><br>';

$array = ['fruits' => ['fraise', 'framboise'], 'légumes' => ['courgettes', 'pomme de terre', 'poivrons']];

var_dump($array);
