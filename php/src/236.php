<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 236</title>
</head>
<?php
extract($_POST)
?>
<body>
    <?php if(isset($quantitat)){ ?>
        <form method="post" action="236.php">
            <?php for ($i = 0; $i < $quantitat; $i++) {?>
                    <h5>Persona <?= $i+1 ?></h5>
                    <label for="nom" class="col-4 col-form-label">Nom</label>
                    <input id="nom" name="nom[]" placeholder="Escriu el nom" type="text" required="required" class="form-control">
                    <label for="nom" class="col-4 col-form-label">Altura</label>
                <input id="altura" name="altura[]" placeholder="Escriu l'altura" type="text" required="required" class="form-control">
                    <label for="nom" class="col-4 col-form-label">Correu electronic</label>
                            <input id="email" name="email[]" placeholder="Escriu el correu electronic" type="email" required="required" class="form-control">
            <?php } ?>
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    <?php } else {
    for ($j = 0; $j < count($email); $j++) { ?>
            <h5>Persona <?= $j+1 ?></h5>
        <p>Nom: <?= $nom[$j] ?></p>
        <p>Alçada: <?= $altura[$j] ?></p>
        <p>Email: <?= $email[$j] ?></p>
        <?php }?>
    <?php
    }

    ?>
</body>
</html>