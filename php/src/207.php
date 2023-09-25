<!DOCTYPE html>
<html lang="es">
<?php
$numero1 = $_GET["numero1"]??null;
$numero2 = $_GET["numero2"]??null;
$numero3 = $_GET["numero3"]??null;
?>
<body>
<?php
    if(isset($numero1) && isset($numero2) && isset($numero3)){
        $major = max($numero1,$numero2,$numero3);
?>
        El nombre més gran entre <?= $numero1 ?>, <?=$numero2 ?> i <?=$numero3 ?> és el <?= $major ?>
<?php      
    }else{
?>
        Posa els números a comprobar a les variables numero1,numero2 i numero3 pel QueryString
<?php        
    }
?>
</body>
</html>