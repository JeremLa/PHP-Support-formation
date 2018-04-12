<?php
echo '<a href="declaration.php">&larr; Retour</a><br><br>';

/**
 * Une boucle if fait un test qui doit être capable de répondre par true ou false.
 */
if( 0 < 1 ) {
    echo 'hahaha';
}

echo '<br><br>';

/**
 * Une boucle if fait un test qui doit être capable de répondre par true ou false.
 * Il est possible d'enchainer les tests.
 * Dès qu'un des tests match, les autres ne sont pas fait.
 */
if( 0 > 1 ) {
    echo 'heuuuuuuuuu';
}else if (0 < 1) {
    echo 'tchoutchou';
}else {
    echo 'nop';
}

echo '<br><br>';

/**
 * Au dela de 3 conditions (if / else) il est fortement recommandé d'utiliser
 * un switch ... case
 * N'oubliez pas le default pour définir un comportement par défault (comme un else)
 * Le mot clé break est utilisé pour dire au programme de sortir quand il a fini le traitement.
 * Si il n'est pas renseigné, le script continue de tester les différents case.
 */

$a = 'c';

switch ($a) {
    case 'a':
        echo 'switch : a';
        break;
    case 'b':
        echo 'switch : b';
        break;
    case 'c':
        echo 'switch : c';
        break;
    case 'd':
        echo 'switch : a';
        break;
    default :
        echo 'aucun résultat.';

}

echo '<br><br>';

$a = 0;

/**
 * La boucle while permet de réaliser des actions tant que la condition n'est pas remplie.
 * La boucle ne se déclenche pas si la condition ne permet pas de rentrer dedans.
 */

while ($a < 5) {
    echo 'while : '.$a.'<br>';
    $a++;
}

echo '<br><br>';

/**
 * Le do...while a exactement le même comportement que la boucle while
 * Attention tout de même, les actions contenue dans la boucle seront toujours
 * joué au moins une fois. La condition n'étant testé qu'en fin de boucle.
 */

do {
    echo 'do ... while : '.$a.'<br>';
    $a--;
}while($a > 0);


echo '<br><br>';

/**
 * La boucle for, permet de parcourir un iterable (tableau, collection, string ...)
 * Tout est définie dans la déclaration de la boucle
 * for ( iterator , condition de parcours, incrementation) {}
 *
 * La condition de parcours doit imperativement pouvoir être remplie si l'on veut éviter les boucles infini.
 *
 * L'itérateur peut être utilisé comme index de notre iterable pour en utiliser la donnée.
 */

$a = 'Hello !';
for ($i = 0; $i < strlen($a); $i++){
    echo 'for : '.$a[$i].'<br>';
}

echo '<br><br>';

/**
 * /!\ Attention, à chaque iteration de la boucle, l'agrégat est recalculé,
 * dans l'exemple suivant, il n'y aura que 5 itérations au lieu des 10 attendus;
 */
$a = 10;
$b = 20;

for ($i = 0; $i < ($b - $a); $i++) {
    $a++;
    echo '/!\\ for : '.$a;
    echo '<br>';
}

echo '<br><br>';

/**
 * Tout comme la boucle for, la boucle foreach permet de parcourir un itérable (array, collection ...)
 * La différence, on enregistre dans une variable la donnée parcourue pour faciliter sa manipulation
 */

$array = ['a', 'b', 'c'];
foreach ($array as $letter) {
    echo 'foreach : '.$letter.'<br>';
}

echo '<br><br>';

/**
 * foreach peut être utilisé pour parcourir des tableaux associatif (clé => valeur)
 */

$fruits = ['0' => 'pomme', '1' => 'poire', '2' => 'banane'];
foreach ($fruits as $key => $value) {
    echo 'foreach : '.$key.' => ' .$value. '<br>';
}

echo '<br><br>';
echo '<br><br>';
echo '<br><br>';