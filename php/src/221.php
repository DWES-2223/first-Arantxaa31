<!DOCTYPE html>
<html lang="es">

<body>
<?php
    $numero = 1;
    $total = 0;
    while($numero <= 10){
        if($numero < 10){
           echo $numero . "+"; 
        }else{
            echo $numero;
        }
        $total += $numero;
        $numero++;
    }
    echo "=" . $total;
?>
</body>
</html>