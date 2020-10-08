<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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

}