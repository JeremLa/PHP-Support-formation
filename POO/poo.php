<?php
echo '<a href="declaration.php">&larr; Retour</a><br><br>';

echo '<i>';
echo "
    Sur cette page ce trouve l'affichage des données (poo.php).<br>
    Les déclarations d'interfaces, de classe et la manipulation des objets<br>
    seront plus interessantes à lire directement dans le fichier.<br>
";

interface IVehicule {
    function accelerer ();
}

class voiture implements IVehicule {
    /**
     * Trois mots clés peuvent définire la visibilitée d'une variable
     * - Private : accessible uniquement dans l'objet courant
     * - Protected : accessible dans l'objet courant ET ses enfants
     * - Public : accessible par tous
     */
    protected $vitesse;
    protected $vitesseMax;
    // Une constante ne peut être redefinie, son nom est en majuscule
    protected const ACCELERATION = 10;

    function accelerer()
    {
        // Accéder à une constante d'un objet se fait avec ::
        // Accéder à la propriété d'un objet se fait avec ->
        if(($this->vitesse + $this::ACCELERATION) > $this->vitesseMax){
            $this->vitesse = $this->vitesseMax;
        }else{
            $this->vitesse += 10;
        }
    }
}

class camion implements IVehicule {

    protected $vitesse;
    protected $vitesseMaxCharge;
    protected $vitesseMax;

    protected const ACCELERATION = 5;

    protected $charge = false;

    /**
     * Grace à l'interface, on est obligé de redéfinir la fonction accelerer
     * qui n'a pas le même comportement pour une voiture ou un camion
     */
    function accelerer()
    {
        if($this->charge){
            if(($this->vitesse + $this::ACCELERATION) > $this->vitesseMaxCharge){
                $this->vitesse = $this->vitesseMaxCharge;
            }else{
                $this->vitesse += 10;
            }
        }else{
            if(($this->vitesse + $this::ACCELERATION) > $this->vitesseMax){
                $this->vitesse = $this->vitesseMax;
            }else{
                $this->vitesse += 10;
            }
        }
    }
}