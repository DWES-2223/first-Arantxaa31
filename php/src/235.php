<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 230</title>
</head>
<body>
<?php
$persones = [
    ['nom'=>'Aitor', 'altura'=>182, 'email'=>'aitor@correo.com'],
    ['nom'=>'Pepe', 'altura'=>192, 'email'=>'pepe@correo.com'],
    ['nom'=>'Juan', 'altura'=>178, 'email'=>'juan@correo.com'],
    ['nom'=>'Mar', 'altura'=>152, 'email'=>'mar@correo.com'],
    ['nom'=>'Ana', 'altura'=>180, 'email'=>'ana@correo.com']
];
$indice  = array_keys($persones);
?>
<table>
    <thead>
    <tr>
        <?php foreach ($persones[$indice[0]] as $persona => $datos){ ?>
            <th><?= $persona ?></th>
        <?php } ?>
    </tr>
    </thead>
    <tbody>
    <?php for ($i = 0; $i < count($persones); $i++) { ?>
        <tr>
        <?php foreach ($persones[$indice[$i]] as $persona => $datos){ ?>
            <td><?= $datos ?></td>
    <?php    } ?>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>