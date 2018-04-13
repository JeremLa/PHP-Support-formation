<?php
require_once ('IObjet.php');

echo '<br><br>';
echo '<i>';
echo "Une classe est une représentation d'un objet, de ses propriétés et ses capacités";
echo '<br>';
echo "Une classe permet d'instancier un objet avec le mot clé 'new'";
echo '<br>';
echo "Les propriétés doivent être private ou protected (private limite l'accès à l'objet, protected à l'objet et ses enfants)";
echo '<br>';
echo "Vous trouverez un exemple d'objet dans le fichier Objet.php";

/**
 * Une classe est une définition de ce qu'un objet sera une fois instancié.
 * L'instanciation d'une classe en objet se fait avec le mot clé new
 *
 * $variable = new [Class]()
 *
 * Les paramètres servent à passer des paramètres au constructeur de l'objet.
 */
class Objet implements IObjet {

    private $a;
    /**
     * Il est possible de définir des constantes dans un objet
     * Une constante est forcément instanciée lors de sa déclaration
     * et ne peux pas être modifiée.
     * Attention, une constante est toujours publique
     */
    const CONSTANTE = 'constante';
    private static $static = 0;

    /**
     * La methode magique __contruct est appelée lors de l'instanciation
     * d'un objet. Elle peut prendre des paramètres
     */
    function __construct($param)
    {
        /**
         * Accéder à des propriétés d'un objet se fait avec le format suivant :
         * [objet]->[propriété]
         * Quand on souhaite accéder à une propriété dans l'objet lui même, on utilise
         * la variable clé $this
         */
        $this->a = $param;

        /**
         * Accéder à une constante d'un objet, la méchanique est la même que pour une
         * propriété mais on utilise :: à la place de ->
         */
        echo $this::CONSTANTE;

        /**
         * Accéder à une donnée statique de la classe se fait de la façon suivante
         * self::[propriété]
         * Très important, self permet d'accéder à une donnée statique de la classe (pas de l'objet)
         * Static peut être défini grossièrement par 'Commun à l'ensemble des objets'
         */
        echo self::CONSTANTE;
        echo self::$static;
    }

    /**
     * On doit définir les méthodes que nous demande de définir
     * l'interface que l'on implémente
     */
    function nomMethode($param): ?int
    {
        return 0;
    }

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @param mixed $a
     */
    public function setA($a): void
    {
        $this->a = $a;
    }
}
