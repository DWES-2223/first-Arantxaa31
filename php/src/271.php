<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 271</title>
</head>
<body>
<?php
include('atletes.php');
global$records;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['prova'])) {
        extract($_POST);
        $pruebaEncontrada = false;

        if(array_key_exists($prova,$records)){

            $records[$prova]['marca'] = $marca;
            $records[$prova]['atleta'] = $atleta;
            $records[$prova]['natalici'] = $natalici;
            $records[$prova]['club'] = $club;
            $records[$prova]['data'] = $data;
            $records[$prova]['lloc'] = $lloc;

            $pruebaEncontrada = true;
        }
    }
    if ($pruebaEncontrada){
        include('270a.php');
    }else{ ?>
        <p>La prova <?= $prova ?> no existeix en la llista de records oficials de la FEA</p>
    <?php }
}else{
    include ('271.html');
}
?>
</body>
</html>