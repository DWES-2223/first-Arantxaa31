<!DOCTYPE html>
<html lang="es">
<?php
$base = $_GET["base"]??null;
$exponent = $_GET["exponent"]??null;
?>
<body>
<?php
    $resultado = $base;
    if(isset($base) && isset($exponent)){
        if($exponent == 0){
            $resultado = 1;
        }else{
            for ($i=1; $i < $exponent ; $i++) {
                $resultado = $resultado * $base;               
            }
        }
        echo $base . '^' . $exponent . " = " . $resultado;
    }else{
        echo "Posa la base i l'exponent a les variables base i exponent pel QueryString";
    }
?>
</body>
</html>