<!DOCTYPE html>
<html lang="es">
<?php
extract($_POST);
$abecedario = 'ABCDEFGHIJKLMNÑOPQRSTUVWXYZ';
?>
<body>
 <?php if(isset($files) && isset($columnes)){
?>
    <table>
        <thred>
            <tr>
            <?php for ($i=1; $i <= $columnes ; $i++) { ?>
                 <th><?= $i ?></th>
            <?php } ?>
            </tr>
        </thred>
        <tbody>
        <?php for ($i=1; $i <= $files ; $i++) { ?>
                 <tr>
                    <?php for ($j=1; $j <= $columnes ; $j++){ ?>
                        <td><?= substr($abecedario,$i-1,1).$j ?></td>
                    <?php } ?> 
                 </tr>
            <?php } ?>
        </tbody>
    </table>
<?php

 }
 ?>
</body>
</html>