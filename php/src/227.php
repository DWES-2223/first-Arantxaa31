<!DOCTYPE html>
<html lang="es">
<?php
$files = $_POST["files"]??null;
$columnes = $_POST["columnes"]??null;
?>
<body>
<?php
    if (is_numeric($files) && is_numeric($columnes)){ ?>
        <table>
            <thead>
                <tr>
                    <?php for ($i=1; $i<=$columnes; $i++){ ?>
                        <th><?= $i ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i=1; $i<=$files; $i++){
                    ?>
                    <tr>
                        <?php for ($j=1; $j<=$columnes; $j++){ ?>
                            <?php if($j == $i || $j == ($columnes - $i + 1 )){ ?>
                                <td><?= chr(64+$i).$j ?></td>
                            <?php }else{ ?>
                                <td></td>
                            <?php } ?>
                        <?php } ?>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

    <?php } else {
        echo 'Introdueix valors numèrics'; }
    ?>
</body>
</html>
