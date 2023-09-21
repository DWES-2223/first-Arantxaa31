<!DOCTYPE html>
<html lang="es">
<?php
$edat = $_GET["edat"]??null;
$anyoActual = date("Y");
?>
<body>
<?php
    if(isset($edat)){
?>
         <?=$edat - 10;?><br/>
         <?=$edat + 10;?><br/>
         <?=$anyoActual + 67 - $edat;?><br/>
<?php
    } else {
?>
        Posa la teu edat actual a la variable edat pel QueryString;
<?php
    }
?>
</body>
</html>