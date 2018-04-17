<?php
interface IVehicule {
    public function accelerer ();
    public function freiner ();
    public function faireLePlein ();
}

abstract class Vehicule implements IVehicule {
    private $roues;
    private $couleurs;
    private $vitesseMax;
    private $reservoirMax;
    private $carburantType;

    protected $vitesse = 0;
    protected $reservoir = 0;

    /**
     * Vehicule constructor.
     * @param $roues
     * @param $couleurs
     * @param $vitesseMax
     * @param $reservoirCapacite
     * @param $carburantType
     */
    public function __construct($roues, $couleurs, $vitesseMax, $reservoirMax, $carburantType)
    {
        $this->roues = $roues;
        $this->couleurs = $couleurs;
        $this->vitesseMax = $vitesseMax;
        $this->reservoirMax = $reservoirMax;
        $this->carburantType = $carburantType;
    }

    abstract function accelerer();

    abstract function freiner();

    abstract function faireLePlein();


    /**
     * @return mixed
     */
    public function getRoues()
    {
        return $this->roues;
    }

    /**
     * @param mixed $roues
     */
    public function setRoues($roues): void
    {
        $this->roues = $roues;
    }

    /**
     * @return mixed
     */
    public function getCouleurs()
    {
        return $this->couleurs;
    }

    /**
     * @param mixed $couleurs
     */
    public function setCouleurs($couleurs): void
    {
        $this->couleurs = $couleurs;
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
    public function getReservoirMax()
    {
        return $this->reservoirMax;
    }

    /**
     * @param mixed $reservoirCapacite
     */
    public function setReservoirMax($reservoirMax): void
    {
        $this->reservoirMax = $reservoirMax;
    }

    /**
     * @return mixed
     */
    public function getCarburantType()
    {
        return $this->carburantType;
    }

    /**
     * @param mixed $carburantType
     */
    public function setCarburantType($carburantType): void
    {
        $this->carburantType = $carburantType;
    }
}

class Voiture extends Vehicule {
    private $nombrePlace;
    private $hasCoffre;

    /**
     * Voiture constructor.
     * @param $roues
     * @param $couleurs
     * @param $vitesseMax
     * @param $reservoirCapacite
     * @param $carburantType
     * @param $nombrePlace
     * @param $hasCoffre
     */
    public function __construct(int $roues,
                                string $couleurs,
                                int $vitesseMax,
                                int $reservoirCapacite,
                                string $carburantType,
                                int $nombrePlace,
                                bool $hasCoffre)
    {
        parent::__construct($roues, $couleurs, $vitesseMax, $reservoirCapacite, $carburantType);
        $this->nombrePlace = $nombrePlace;
        $this->hasCoffre = $hasCoffre;
    }


    function accelerer()
    {
        if(($this->vitesse + 5) < $this->getVitesseMax()){
            $this->vitesse = $this->vitesse + 5;
        }else {
            $this->vitesse = $this->getVitesseMax();
        }
    }

    function freiner()
    {
        if(($this->vitesse - 5) > 0){
            $this->vitesse = $this->vitesse - 5;
        }else {
            $this->vitesse = 0;
        }
    }

    function faireLePlein()
    {
        while ($this->reservoir < $this->getReservoirMax()) {
            $this->reservoir++;
        }
    }
}