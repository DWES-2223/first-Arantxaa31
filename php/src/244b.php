<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 236</title>
</head>
<?php
include ('functions.php');
$nom = $_POST['nom']??null;
$preus = $_POST['preu']??null;
$totalEnEuros = 0;
?>
<body>
<table>
    <thead>
        <th>Nom</th>
        <th>Euros</th>
        <th>Pesetes</th>
    </thead>
    <tbody>
        <?php for ($i = 0; $i < count($nom); $i++) {
            $totalEnEuros += $preus[$i];
            ?>
            <tr>
                <td><?= $nom[$i] ?>  </td>
                <td><?= $preus[$i] ?> €</td>
                <td><?= euro2pesetes($preus[$i]) ?> pesetas</td>
            </tr>
        <?php } ?>
            <tr>
                <td>Total en euros: <?= $totalEnEuros?></td>
            </tr>
            <tr>
                <td>Total en pesetas: <?= euro2pesetes($totalEnEuros)?></td>
            </tr>
    </tbody>
</table>
</body>
</html>
