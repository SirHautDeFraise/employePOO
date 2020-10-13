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
        <?php
        include 'classes/employe.php';
        include 'classes/projet.php';
        include 'classes/employeinformaticien.php';
        include 'classes/employenoninformaticien.php';
        include 'includes/Traitement.php';

        try {
            Traitement::instanciationProjetV1();
            Traitement::instanciationEmployeInformaticienV1();
            Traitement::instanciationEmployeNonInformaticienV1();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        ?>
    </body>
</html>
