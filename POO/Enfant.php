<?php
require_once ('Objet.php');

echo '<br><br>';
echo '<i>';
echo "Une classe peut étendre une autre classe avec le mot clé 'extends'";
echo '<br>';
echo "Elle pourra être instanciée exactement de la même façon qu'un autre objet.";
echo '<br>';
echo "Ses propriétés seront private mais elle aura également accès à l'ensemble des propriétés protected de la classe qu'elle extend";
echo '<br>';
echo "Vous trouverez un exemple d'objet enfant dans le fichier Enfant.php";

/**
 * Si l'on souhaite hériter une clase d'un autre objet
 * on ajoute le mot clé 'extends' suivit du nom de l'objet
 * Il est possible d'extends de plusieurs objets
 */
class Enfant extends Objet {

    private $b = 0;

    /**
     * Pour envoyer des données aux parents lors de l'instanciation de
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
     * Les accesseurs et Mutateurs sont des fonctions publiques qui permettent de manipuler
     * les propiétés privées d'un objet.
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

