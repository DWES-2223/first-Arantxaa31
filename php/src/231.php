<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 230</title>
</head>
<body>
<?php
$array = [];
for ($i=0; $i <33 ; $i++) {
    $numeroAleatorio = rand(0, 100);
    $array[] = $numeroAleatorio;
}
$major = max($array);
$menor = min($array);
$totalArray = 0;
foreach ($array as $valor){
    $totalArray += $valor;
    $mitjana = $totalArray / count($array);
}
?>
<p>El major és: <?= $major ?></p>
<p>El menor és: <?= $menor ?></p>
<p>La mitjana és: <?= $mitjana ?></p>
</body>
</html>