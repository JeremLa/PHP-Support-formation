<?php
echo '<a href="declaration.php">&larr; Retour</a><br><br>';


/**
 * La déclaration de variable est auto typée
 */
$a = 10;
$b = 'Hello world';
$c = true;
$d = ['a', 'b', 'c'];

echo '<i>';
echo
' La commande echo, en PHP, permet d\'afficher du contenu de type simple : int, string, boolean, ...<br>
 <b>\$d</b> est un tableau, il faut utiliser la commande PHP var_dump().';
echo '</i>';
echo '<br><br>';
echo $a;
echo '<br><br>';
echo $b;
echo '<br><br>';
echo $c;
echo '<br><br>';

echo '<i>';
echo "
 Une erreur d'affichage (array to string conversion ici) n'est pas blocante, le script continu d'être executé.";
echo '</i>';
echo '<br><br>';

echo $d;
echo '<br><br>';
var_dump($d);
echo '<br><br>';

echo '<i>';
echo "
 L'auto typage des variables permet de faire des réafectations de variable sans avoir à se pauser de questions<br>
 Ici on utilise la commande PHP gettype() qui permet de connaitre le type d'une variable";
echo '</i>';
echo '<br><br>';

$e = 10;
echo $e;
echo '<br>';
echo gettype($e);
echo '<br><br>';

$e = 'Je ne suis plus un int';
echo $e;
echo '<br>';
echo gettype($e);
echo '<br><br>';

echo '<i>';
echo "
Le ; (similicon en anglais) est le symbole qui indique à notre interpreteur où se trouve la fin d'une instruction
Si il est manquant, cette fois, c'est une exception (Parse error) qui est levée et le script est interrompu.";
echo '</i>';
echo '<br><br>';

// Décommenter la ligne pour tester.
//echo $f = 'Hello World !'
