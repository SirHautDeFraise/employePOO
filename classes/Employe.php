<?php

/**
 * Description of Employe
 *
 * @author laude.thibault
 */
class Employe {

  protected int $numero;
  protected string $nom;
  protected string $prenom;
  protected DateTime $dateDeNaissance;
  protected float $salaireM;

  function __construct(int $pnum, string $pnom, string $pprenom, DateTime $pddn, float $psalaire) {
    $this->numero = $pnum;
    $this->nom = $pnom;
    $this->prenom = $pprenom;
    $this->dateDeNaissance = $pddn;
    $this->salaireM = $psalaire;
  }

  public function getNumero(): int {
    return $this->numero;
  }

  public function getNom(): string {
    return $this->nom;
  }

  public function getPrenom(): string {
    return $this->prenom;
  }

  function getDateDeNaissance(): DateTime {
    return $this->dateDeNaissance;
  }

  function getSalaireM(): float {
    return $this->salaireM;
  }
  
  public function __toString(): string {
    return $this->numero . " - " .$this->getNom() . " - " .$this->getPrenom(). " - "
            . $this->dateDeNaissance->format('d/m/Y') . " - ". $this->getSalaireM();
  }

}
