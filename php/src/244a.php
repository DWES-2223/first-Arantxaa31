<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 236</title>
</head>
<?php
extract($_GET);
?>
<body>
<?php if(isset($quantitat) && is_numeric($quantitat)){ ?>
    <form method="post" action="244b.php">
        <?php for ($i = 0; $i < $quantitat; $i++) {?>
            <h5>Producte <?= $i+1 ?></h5>
            <label for="nom" class="col-4 col-form-label">Nom del producte</label>
            <input id="nom" name="nom[]" placeholder="Escriu el nom" type="text" required="required"><br><br>
            <label for="preu" class="col-4 col-form-label">Preu del producte</label>
            <input id="preu" name="preu[]" placeholder="Escriu el preu" type="text" required="required"> €<br>
        <?php } ?>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php } else {
    echo 'Introduce una cantidad';
}
?>
</body>
</html>