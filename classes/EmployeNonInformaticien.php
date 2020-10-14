<?php

/**
 * Description de la classe EmployeNonInformaticien
 *
 * @author Thibault
 */
class EmployeNonInformaticien extends Employe{

    private float $primeA;

    public function __construct(string $pnumero, string $pnom, string $pprenom, DateTime $pdate, float $psalaire, float $pprimeA) {
        Employe::__construct($pnumero, $pnom, $pprenom, $pdate, $psalaire);
        $this->primeA = $pprimeA;
    }

    public function setPrimeA(float $primeA): void {
        if ($primeA > $this->getSalaireM()) {
            $this->primeA = $this->getSalaireM();
        } elseif ($primeA < $this->getSalaireM()) {
            $this->primeA = $primeA;
        }
    }

    public function getPrimeA(): float {
        return $this->primeA;
    }
    
    public abstract function gainAnnuel() : float;

    public function __toString(): string {
        return "Non Informaticien : " . $this->numero . " - " . $this->getNom() . " - " . $this->getPrenom() . " - "
                . $this->dateDeNaissance->format('d/m/Y') . " - " . $this->getSalaireM() . $this->getPrimeA();
    }

}
