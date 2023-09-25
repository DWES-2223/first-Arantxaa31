<!DOCTYPE html>
<html lang="es">
<?php
$nombre = $_GET["nombre"]??null;
?>
<body>
<?php
    if(isset($nombre)){
?>
<table>
  <thead>
    <tr>
      <th>a</th>
      <th>*</th>
      <th>b</th>
      <th>=</th>
      <th>a*b</th>
    </tr>
  </thead>
  <tbody>
<?php
       for ($i=1; $i <= 10 ; $i++) { 
        $multiplicacion = $nombre * $i;
        echo "<tr> <td>" . $nombre . "</td> <td>*</td> <td>" . $i ."</td> <td>=</td> <td>" . $multiplicacion . "</td> </tr>";
       }
?>
</tbody>
</table>
<?php
    }else{
        echo "Posa el nombre pel QueryString";
    }
?>
</body>
</html>