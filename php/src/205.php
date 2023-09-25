<!DOCTYPE html>
<html lang="es">
<?php
$quantitat = $_GET["quantitat"]??null;
$billetes = [500,200,100,50,20,10,5];
$monedas = [2,1];
?>
<body>
<?php
    if(isset($quantitat)){
            foreach($billetes as $billete){
              $numeroBillets = intdiv($quantitat,$billete);
             if($numeroBillets > 0){
                  $quantitat -= $numeroBillets * $billete;
                  if($numeroBillets == 1){
?>
                   <?= $numeroBillets?> bitllet de <?= $billete?><br>
<?php
                }else{
?>
                    <?= $numeroBillets?> bitllets de <?= $billete?><br>
<?php
                }
             }
            }
            foreach($monedas as $moneda){
                $numeroMonedas = intdiv($quantitat,$moneda);
                if($numeroMonedas > 0){
                    $quantitat -= $numeroBillets * $billete;
                    if($numeroMonedas == 1){
?>
                        <?= $numeroMonedas?> moneda de <?= $moneda?><br>
<?php
                    }else{
?>
                        <?= $numeroMonedas?> monedes de <?= $moneda?><br>
<?php
                    }
                }
            }

    }else{
?>
        Posa la quantitat a la variable quantitat pel QueryString;
<?php
    }
?>
</body>
</html>