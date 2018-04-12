<?php
require_once ('Objet.php');

echo '<br><br>';
echo '<i>';
echo "Une class peut étendre une autre class avec le mot clé 'extends'";
echo '<br>';
echo "Elle pourra être instancié exactement de la même façon qu'un autre objet.";
echo '<br>';
echo "Ses propriétés seront private mais elle aura également accès à l'ensemble des propriété protected de la class qu'elle extend";
echo '<br>';
echo "Vous trouverez un exemple d'objet enfant dans le fichier Enfant.php";

/**
 * Si l'on souhaite hériter une class d'un autre objet
 * on ajoute le mot clé 'extends' suivit du nom de l'objet
 * Il est possible d'extends de plusieurs objet
 */
class Enfant extends Objet {

    private $b = 0;

    /**
     * Pour envoyer des données au parents lors de l'instanciation de
     * l'objet, on va utiliser le format suivant
     *
     * parent::__construct($param)
     */
    function __construct($param1, $param2)
    {
        $this->b = $param1;
        parent::__construct($param2);
    }

    /**
     * Par défaut, un enfant est capable d'utiliser toutes les méthodes public ou protected
     * d'un parent. Mais si l'on souhaite y ajouter un comportement, on peut la redéfinir
     * comme ci-dessous.
     */
    function nomMethode($param): ?int
    {
        return parent::nomMethode($param) * 2;
    }

    /**
     * Les accesseurs et Mutateurs sont des fonctions public qui permettent de manipuler
     * les propiétés privé d'un objet.
     * par convention on nomme un accesseur avec le format
     *
     *      get[Variable] () : [type de retour]
     *
     * par convention on nomme un mutateur avec le format
     *
     *      set[Variable] (type [nom de la variable])
     */

    /**
     * @return int
     */
    public function getB(): int
    {
        return $this->b;
    }

    /**
     * @param int $b
     */
    public function setB(int $b): void
    {
        $this->b = $b;
    }
}

