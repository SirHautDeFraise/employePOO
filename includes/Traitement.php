<?php

/**
 * Traitement
 * Cette classe vous permettra d'écrire les méthodes stockant les traitements 
 * et qui seront appelées depuis le script index.php
 * @author laude.thibault
 */
class Traitement {

  public static function instanciationUnEmploye(): void {
    $e = new employe(1, "Dupont", "Jacques", new DateTime("12/07/1980"), 1000.00);
    echo $e;
  }

  /* ->getNom();
    echo "l'employé instancié s'appelle " . $nom;
   */
}
