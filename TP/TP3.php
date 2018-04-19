<?php
/**
 * TP 3
 *
 * Une fabrique de véhicules possède plusieurs chaînes de montage. L’une pour les voitures, une autre pour les deux roues et une dernière pour les camions.
 *
 * Un véhicule a toujours des roues, une couleur, une vitesse maximale, un réservoir et un carburant.
 *
 * Une voiture a un nombre de places, un coffre ou un hayon.
 *
 * Un deux roues a une cylindré, un coffre ou pas et peut être bridé ou non.
 *
 * Un camion lui a une vitesse maximale dépendante de son chargement, il peut avoir une remorque et elle même peut être chargée.
 *
 * Tout véhicule a la capacité d'accélérer, de freiner, de faire le plein.
 *
 */

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
     * @param int $roues
     * @param string $couleurs
     * @param int $vitesseMax
     * @param int $reservoirMax
     * @param string $carburantType
     */
    public function __construct(int $roues = 4,
                                string $couleurs = 'blanc',
                                int $vitesseMax = 110,
                                int $reservoirMax = 50,
                                string $carburantType = 'essence')
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
    public function __construct(int $nombrePlace,
                                bool $hasCoffre,
                                int $roues,
                                string $couleurs,
                                int $vitesseMax,
                                int $reservoirCapacite,
                                string $carburantType)
    {
        parent::__construct($roues, $couleurs, $vitesseMax, $reservoirCapacite, $carburantType);
        $this->nombrePlace = $nombrePlace;
        $this->hasCoffre = $hasCoffre;
    }


    function accelerer()
    {
        if(($this->vitesse + 5) < $this->getVitesseMax()){
            $this->vitesse += 5;
        }else {
            $this->vitesse = $this->getVitesseMax();
        }
    }

    function freiner()
    {
        if(($this->vitesse - 5) > 0){
            $this->vitesse -= 5;
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

class DeuxRoues extends Vehicule {
    private $cylindre;
    private $hasCoffre;

    /**
     * DeuxRoues constructor.
     * @param int $cylindre
     * @param bool $hasCoffre
     * @param int $roues
     * @param string $couleurs
     * @param int $vitesseMax
     * @param int $reservoirCapacite
     * @param string $carburantType
     */
    public function __construct(int $cylindre,
                                bool $hasCoffre,
                                int $roues,
                                string $couleurs,
                                int $vitesseMax,
                                int $reservoirCapacite,
                                string $carburantType)
    {
        parent::__construct($roues, $couleurs, $vitesseMax, $reservoirCapacite, $carburantType);

        $this->cylindre = $cylindre;
        $this->hasCoffre = $hasCoffre;
    }


    function accelerer()
    {
        if(($this->vitesse + 10) < $this->getVitesseMax()){
            $this->vitesse += 10;
        }else {
            $this->vitesse = $this->getVitesseMax();
        }
    }

    function freiner()
    {
        if(($this->vitesse - 3) > 0){
            $this->vitesse -= 3;
        }else {
            $this->vitesse = 0;
        }
    }

    function faireLePlein()
    {
        while ($this->reservoir < $this->getReservoirMax()) {
            $this->reservoir = $this->reservoir + 2;
        }
    }
}

class Camion extends Vehicule {
    private $hasRemorque;
    private $isCharge;

    /**
     * DeuxRoues constructor.
     * @param int $cylindre
     * @param bool $hasCoffre
     * @param int $roues
     * @param string $couleurs
     * @param int $vitesseMax
     * @param int $reservoirCapacite
     * @param string $carburantType
     */
    public function __construct(bool $hasRemorque,
                                bool $isCharge,
                                int $roues,
                                string $couleurs,
                                int $reservoirCapacite,
                                string $carburantType)
    {
        $this->hasRemorque = $hasRemorque;
        $this->isCharge = $isCharge;

        if(!$this->hasRemorque) {
            $this->isCharge = false;
        }


        $vitesseMax = $this->findVitesseMax();

        parent::__construct($roues, $couleurs, $vitesseMax, $reservoirCapacite, $carburantType);


    }

    private function findVitesseMax () : int {
        $vitessePossible = ['sansRemorque' => 100, 'avecRemorqueVide' => 90, 'avecRemorquePleine' => 80];

        if(!$this->hasRemorque) {
            return $vitessePossible['sansRemorque'];
        }elseif ($this->hasRemorque && !$this->isCharge) {
            return $vitessePossible['avecRemorqueVide'];
        }elseif ($this->hasRemorque && $this->isCharge) {
            return $vitessePossible['avecRemorquePleine'];
        }else {
            return 0;
        }
    }


    public function accelerer()
    {
        if(($this->vitesse + 2) < $this->getVitesseMax()){
            $this->vitesse += 2;
        }else {
            $this->vitesse = $this->getVitesseMax();
        }
    }

    public function freiner()
    {
        if(($this->vitesse - 10) > 0){
            $this->vitesse -= 10;
        }else {
            $this->vitesse = 0;
        }
    }

    public function isStop() : bool {
        return $this->vitesse == 0;
    }

    public function faireLePlein()
    {
        while ($this->reservoir < $this->getReservoirMax()) {
            $this->reservoir = $this->reservoir + 5;
            echo 'remplissage : '.$this->reservoir.'/'.$this->getReservoirMax();
        }
    }
}