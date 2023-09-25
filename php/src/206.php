<!DOCTYPE html>
<html lang="es">
<?php
$numero = $_GET["numero"]??null;
?>
<body>
<?php
    if(isset($numero)){
        if($numero == 0){
?>
            El número <?= $numero ?> és zero; 
<?php
        }elseif($numero < 0){
?>
            El número <?= $numero ?> és negatiu; 
<?php
        }else{
?>
            El número <?= $numero ?> és positiu; 
<?php
        }
    }else{
?>
        Posa el numero a comprobar a la variable numero del QueryString
<?php
    }
?>
</body>
</html>