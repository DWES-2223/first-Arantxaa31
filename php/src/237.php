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
    <form method="post" action="237.php">
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
        $maxim = max($altura);
        $minim = min($altura);
        $lugarMin = array_search($minim,$altura);
        $lugarMax = array_search($maxim,$altura); ?>
    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Alçada</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
    <?php for ($j = 0; $j < count($email); $j++) { ?>
        <?php if ($j == $lugarMax || $j == $lugarMin){ ?>
            <tr>
                <td style="font-weight: bold"><?= $nom[$j]?></td>
                <td style="font-weight: bold"><?= $altura[$j]?></td>
                <td style="font-weight: bold"><?= $email[$j]?></td>
            </tr>
       <?php }else{  ?>
            <tr>
                <td><?= $nom[$j]?></td>
                <td><?= $altura[$j]?></td>
                <td><?= $email[$j]?></td>
            </tr>
       <?php }?>
        <?php }?>
        </tbody>
    </table>
    <?php
    }
    ?>
</body>
</html>