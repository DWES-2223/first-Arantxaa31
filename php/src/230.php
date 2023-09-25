<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 230</title>
</head>
<body>
<?php
$array = [];
for ($i=0; $i <50 ; $i++) { 
    $numeroAleatorio = rand(0, 99);
    $array[] = $numeroAleatorio;
}
?>
<ul>
    <?php foreach ($array as $valor) { ?>
       <li><?= $valor ?></li>
    <?php } ?>
</ul>
</body>
</html>