<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista equipos.</title>
  </head>
  <body>
<?php
//Me conecto con la base de datos.
$conector=new mysqli ("localhost","root","","liga");
if ($conector-> connect_errno) {
  echo "Fallo al conectar a MySQL: ".$conector->connect_errno;
}
else {
 $resultado=$conector->query("select * from partido");
//Sale por pantalla la consulta.
 echo "<table border='15'>";
foreach ($resultado as $partido) {
  echo "<tr align='center'>
    <td><br>ID:".$partido['id_partido']."</td>
    <td><br>EQUIPO: <a href=equipo.php?equipo=".$partido['local'].">".$partido['local']."</a></td>
    <td><br>RESULTADO:".$partido['resultado']."</td>
    <td><br></td>
  </tr>";
  }
  echo "</table>";
}
 ?>
  </body>
</html>
