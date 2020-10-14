<?php

/**
 * Description de la classe EmployeInformaticien
 *
 * @author Thibault
 */
class EmployeInformaticien extends Employe {

    private float $primeM;

    public function __construct(string $pnumero, string $pnom, string $pprenom, DateTime $pdate, float $psalaire, float $pprimeM, Projet $unProjet) {
        Employe::__construct($pnumero, $pnom, $pprenom, $pdate, $psalaire);
        $this->primeM = $pprimeM;
    }

    public function setPrimeM(float $primeM): void {
        if ($primeM > ($this->getSalaireM() * 0.3)) {
            $this->primeM = $primeM;
        } else {
            throw new Exception("La prime ne doit pas excéder 30% du salaire");
        }
    }

    public function getPrimeM(): float {
        return $this->primeM;
    }
    
    public abstract function gainAnnuel() : float;

    public function __toString(): string {
        return "Informaticien : " . $this->numero . " - " . $this->getNom() . " - " . $this->getPrenom() . " - "
                . $this->dateDeNaissance->format('d/m/Y') . " - " . $this->getSalaireM() . $this->getPrimeM();
    }

}
