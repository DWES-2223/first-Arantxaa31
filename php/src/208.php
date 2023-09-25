<!DOCTYPE html>
<html lang="es">
<?php
$edat = $_GET["edat"]??null;
?>
<body>
<?php
    if(isset($edat)){
        if($edat < 3){
?>
            ets un bebe
<?php
        }elseif($edat <= 12){
?>
            ets un xiquet
<?php
        }elseif($edat <= 17){
?>
            ets un adolescent
<?php
        }elseif($edat <= 66){
?>
            ets un adult';
<?php
        }else{
?>
            ets un jubilat
<?php
        }
    }else{
?>
        Posa la teu edat actual a la variable edat pel QueryString
<?php
    }
?>
</body>
</html>