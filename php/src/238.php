<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 238</title>
</head>

<body>
<?php
$arrayNumeros = [];
$existe = false;
$min = 999;
$max = 0;
$columnaMax = 0;
$filaMax = 0;
for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 9; $j++) {
        do{
            $numAleatorio = rand(100,999);
            $yaExiste = array_search($numAleatorio,$arrayNumeros);
        }while($yaExiste);
        $arrayNumeros[$i][$j] = $numAleatorio;
        if ($numAleatorio > $max){
            $max = $numAleatorio;
            $columnaMax = $j;
        }
        if($numAleatorio < $min){
            $min = $numAleatorio;
            $filaMax = $i;
        }
    }
}
?>
<table>
    <tbody>
    <?php
    for ($k = 0; $k < 6; $k++) {
        echo '<tr>';
        for ($l = 0; $l < 9; $l++) {
            if($columnaMax == $l){
                echo '<td style ="color: blue">'. $arrayNumeros[$k][$l] .'</td>';
            }else if($filaMax == $k) {
                echo '<td style ="color: green">' . $arrayNumeros[$k][$l] . '</td>';
            }else{
                echo '<td style ="color: black">' . $arrayNumeros[$k][$l] . '</td>';
            }

        }
        echo '<tr>';
    }
    ?>
    </tbody>
</table>

</body>
</html>