<!DOCTYPE html>
<html lang="es">
<?php
extract($_POST)
?>
<body>
<?php if(isset($quantitat)){ ?>
    <form method="post" action="224.php">
      <?php for ($i=0; $i < $quantitat ; $i++) { ?>
            <div class="form-group row">
            <label for="nom" class="col-4 col-form-label">Numero</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="quantitat" name="quantitat<?= $i ?>" placeholder="Escriu la quantitat de dades" type="text" required="required" class="form-control">
                </div>
            </div>
      <?php } ?> 
      <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form> 
<?php } else { 
    $total = 0;
    foreach ($_POST as  $numeros) {
        if(is_numeric($numeros)){
            $total += $numeros;
        }
    }
    echo $total;
} ?>
</body>
</html>