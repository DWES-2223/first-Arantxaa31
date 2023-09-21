<!DOCTYPE html>
<html lang="es">
<?php
$nom = 'Arantxa';
$cognom1 = 'Gandia';
$cognom2 = 'Sanchis';
$email = 'gandiaarantxa@gmail.com';
$naixement = '2003';
$telefon = '661778612';
?>
<body>
<table>
<tr>
    <td>Nom</td>
    <td><?= $nom ?></td>
</tr>
<tr>
    <td>Cognoms</td>
    <td><?= $cognom1 . ' ' . $cognom2?></td>
</tr>
<tr>
    <td>Email</td>
    <td><?= $email?></td>
</tr>
<tr>
    <td>Natalici</td>
    <td><?= $naixement?></td>
</tr>
<tr>
    <td>Telèfon</td>
    <td><?= $telefon?></td>
  </tr>

</table>
</body>
</html>