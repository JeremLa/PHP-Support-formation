<?php
echo '<a href="tp.php">&larr; Retour</a><br><br>';

class Fourgonnette {
    const ROUES = 4;
    private $carburant;
    private $vitesse = 0;
    private $vitesseMax;
    private $hauteur;
    private $longueur;
    private $couleur;

    public function __construct($carburant, $vitesseMax, $hauteur, $longueur, $couleur)
    {
        $this->carburant = $carburant;
        $this->vitesseMax = $vitesseMax;
        $this->hauteur = $hauteur;
        $this->longueur = $longueur;
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * @param mixed $carburant
     */
    public function setCarburant($carburant): void
    {
        $this->carburant = $carburant;
    }

    /**
     * @return mixed
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * @param mixed $vitesse
     */
    public function setVitesse($vitesse): void
    {
        $this->vitesse = $vitesse;
    }

    /**
     * @return mixed
     */
    public function getVitesseMax()
    {
        return $this->vitesseMax;
    }

    /**
     * @param mixed $vitesseMax
     */
    public function setVitesseMax($vitesseMax): void
    {
        $this->vitesseMax = $vitesseMax;
    }

    /**
     * @return mixed
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * @param mixed $hauteur
     */
    public function setHauteur($hauteur): void
    {
        $this->hauteur = $hauteur;
    }

    /**
     * @return mixed
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * @param mixed $longueur
     */
    public function setLongueur($longueur): void
    {
        $this->longueur = $longueur;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur): void
    {
        $this->couleur = $couleur;
    }

    public function __toString()
    {
        $value = self::ROUES . 'roues.';
        $value .= '<br>';
        $value .= '<b>Carburant</b> : '.$this->getCarburant();
        $value .= '<br>';
        $value .= '<b>Vitesse max</b> : '.$this->getVitesseMax();
        $value .= '<br>';
        $value .= '<b>Hauteur</b> : '.$this->getHauteur();
        $value .= '<br>';
        $value .= '<b>Longueur</b> : '.$this->getLongueur();
        $value .= '<br>';
        $value .= '<b>Couleur</b> : '.$this->getCouleur();
        $value .= '<br>';

        return $value;
    }
}

$a = new Fourgonnette('Diesel', '120', 2300, 4260, 'gris');
echo $a;
