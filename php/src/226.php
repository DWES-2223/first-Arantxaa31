<!DOCTYPE html>
<html lang="es">
<?php
$files = $_POST["files"]??null;
$columnes = $_POST["columnes"]??null;
$abecedario = 'ABCDEFGHIJKLMNÑOPQRSTUVWXYZ';
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
                            <?php if($i == 1 || $j== 1){ ?>
                                <td><?= substr($abecedario,$i-1,1).$j ?></td>
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
