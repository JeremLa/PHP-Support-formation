<?php
echo '<a href="declaration.php">&larr; Retour</a><br><br>';

/**
 * Depuis PHP 5.4 il existe deux façon de déclarer un tableau
 * en affichant nos tableaux avec var_dump, on constate que les deux variables contiennent
 * les mêmes valeurs.
 *
 * var_dump lui nous permet de vérifier le type, le nombre d'élément et le contenue de notre tableau.
 */
$array = array();
$array2 = [];

var_dump($array);

echo '<br><br>';

print_r($array);
print_r($array2);

echo '<br><br>';

/**
 * PHP a associé le type 'array' à notre variable mais il ne regarde pas
 * le type des données dans ce tableau, on a le droit d'y mettre ce que le veux.
 */

$array = ['truc', false, 10, 'machin'];

print_r($array);

echo '<br>';

var_dump($array);

echo '<br><br>';

/**
 * Dans la construction d'un tableau, par défaut, chaque donnée a un index (qui commence à 0), ce qui permet
 * de parcourir facilement le tableau.
 */

echo 'index 0 de notre tableau : '.$array[0];
echo '<br><br>';
/**
 * Parfois l'index numérique ne correspond pas aux besoins. Il est donc possible de faire des tableaux
 * associatif qui auront une clé personnalisé associé à une donnée.
 */

$array = ['Virginie' => 'présidente', 'Sylvain' => 'associé', 'Bastien' => 'Colaborateur', 'Adrien' => 'Colaborateur'];

echo 'Un tableau associatif : ';
var_dump($array);
echo '<br>';
echo 'Le poste de Virginie : '.$array['Virginie'];
echo '<br><br>';
echo 'On a plus accès à l\'index numérique';
echo $array[0];
echo '<br><br>';

/**
 * On peut très facilement ajouté des données dans un tableau.
 * Il suffit d'utiliser la variable suivie de crochet vide si on souhaite juste ajouter une donnée à la fin,
 * avec la clé si on souhaite quelque chose de plus précis.
 */

echo 'On ajoute un string en fin de tableau sans préciser d\'index.';
echo '<br>';
echo 'Automatiquement, un index numérique est créé, 0 quand c\'est le premier index numérique';
echo '<br>';
$array[] = 'coucou';
var_dump($array);
echo '<br><br>';

echo 'En précisant un index, on ajoute en fin de tableau une clé => valeur';
echo '<br>';
$array['Jérémy'] = 'formateur';
var_dump($array);
echo '<br><br>';

/**
 * Comme on peut mettre n'importe quel type de données dans un tableau, on peut y mettre un tableau.
 * C'est ce que l'on appel un tableau multi dimensionel
 */

$array = ['fruits' => ['tomate', 'pomme', 'poire'], 'légumes' => ['courgette', 'pomme de terre', 'haricot']];
var_dump($array);
echo '<br>';
echo 'Chaque tableau est accessible comme un tableau normal, en ajoutant des crochets par dimension';
echo 'si je souhaite afficher les pommes : $array[\'fruits\'][1]';
echo '<br>';
echo 'Afficher pomme : '. $array['fruits'][1];