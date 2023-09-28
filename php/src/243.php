<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 243</title>
</head>
<?php
include ('functions.php');
$pesetas = $_POST['pesetas']??null;
$euros = $_POST['euros']??null;
if (isset($pesetas) || isset($euros)){
    if ($pesetas > 0){
        $pesetasAEuros = peseta2euros($pesetas); ?>
        <p><?= $pesetas?> pesetas son <?= $pesetasAEuros ?> euros</p>
<?php    }
        if ($euros > 0){
        $eurosAPesetas = euro2pesetes($euros); ?>
        <p><?= $euros?> euros son <?= $eurosAPesetas ?> pesetas</p>
    <?php    }
}else{ ?>
    <form method="post" action="243.php">
        <label for="pesetas">Pesetas:</label>
        <input type="text" id="pesetas" name="pesetas" placeholder="Escribe la contidad de pesetas"><br>
        <label for="euros">Euros:</label>
        <input type="text" id="euros" name="euros" placeholder="Escribe la contidad de euros"><br>
        <input type="submit" value="Convertir">
    </form>
<?php } ?>
<body>

</body>
</html>