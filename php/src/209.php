<!DOCTYPE html>
<html lang="es">
<?php
$hora = $_GET["hora"]??null;
$minut = $_GET["minut"]??null;
$segon = $_GET["segon"]??null;
?>
<body>
<?php
    if(isset($hora) && isset($minut) && isset($segon)){
        $segon ++;
        if($segon >= 60){
            $segon = 0;
            $minut ++;
        }
        if($minut >= 60){
            $minut = 0;
            $hora ++;
        }
        if($hora >= 24){
            $hora = 0;
        }
?>
        <?= $hora ?>:<?= $minut ?>:<?= $segon ?>
<?php
    }else{
?>
        Posa les variables hora, minut i segon pel QueryString
<?php
    }
?>
</body>
</html>