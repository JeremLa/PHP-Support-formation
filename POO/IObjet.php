<?php
echo '<a href="poo.php">&larr; Retour</a><br><br>';


echo '<i>';
echo "Une interface permet de définir la signature d'une fonction.";
echo '<br>';
echo "Toutes les class qui implémantent cette interface, devront définir ces fonctions";
echo '<br>';
echo "Une signature, c'est l'entête d'une fonction sans son corp (<b><del>{}</del></b>)";
echo '<br>';
echo "Vous trouverez un exemple d'interface dans le fichier IObjet.php";

interface IObjet {
    /**
     * On défini l'accès, le nom, les paramètres et le retour.
     * Il peut ne pas y avoir de paramètre et / ou de retour.
     * Une interface ne peu définir que des function public
     * Public étant implicite, il n'est pas obligatoire de
     * le préciser
     */
    function nomMethode($param) : ?int;
}