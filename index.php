<!DOCTYPE html>
<!--
Page index.php fait par LAUDE Thibault
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <p>Salut</p>
    <?php
    include 'classes/employe.php';
    include 'includes/Traitement.php';

    try {
      Traitement::instanciationUnEmploye();
      Traitement::instanciationUnEmployeErreur();
      Traitement::instanciationUnEmploye();
    } catch (Exception $ex) {
      echo $ex->getMessage();
    }
    ?>
  </body>
</html>
