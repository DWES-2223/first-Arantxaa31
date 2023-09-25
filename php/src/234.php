<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 230</title>
</head>
<body>
<?php
$arrayPersonas = [
    "Arantxa" =>"1.80",
    "Marta" =>"1.55",
    "Paco" =>"1.85",
    "Pere" =>"2.10",
    "Pepa" =>"1.70"
];
$mitjana = 0;
?>
<table>
    <thead>
    <th>Nom</th>
    <th>Alçada</th>
    </thead>
    <tbody>
    <?php foreach ($arrayPersonas as $persona => $altura){
        $mitjana += $altura;
        ?>
        <tr>
        <td><?= $persona ?></td>
        <td><?= $altura ?></td>
        </tr>
    <?php } ?>
    <tr>
        <td>La mitjana és: <?= $mitjana/count($arrayPersonas)?></td>
    </tr>
    </tbody>
</table>
</body>
</html>