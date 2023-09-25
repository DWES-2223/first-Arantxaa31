<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 230</title>
</head>
<body>
<?php
$valor1 = 'F';
$valor2 = 'M';
$array = [];
$arrayContador = ["F" => 0, "M" =>0 ];

for ($i = 0; $i < 100; $i++) {
    $numAleatorio = rand(1,2);
    if($numAleatorio == 1){
        $array[$i] = $valor1;
    }else{
        $array[$i] = $valor2;
    }
}
foreach ($array as $letra ){
    if($letra == "F"){
        $arrayContador["F"] ++;
    }else{
        $arrayContador["M"] ++;
    }
}
?>
<p>M -> <?= $arrayContador["M"] ?></p>
<p>F -> <?= $arrayContador["F"] ?></p>

</body>
</html>