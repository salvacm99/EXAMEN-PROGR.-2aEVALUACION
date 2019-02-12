<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista equipos.</title>
  </head>
  <body>
    <br><a href="index.php">VOLVER.</a>
<?php
//Me conecto con la base de datos.
$conector=new mysqli ("localhost","root","","liga");
if ($conector-> connect_errno) {
  echo "Fallo al conectar a MySQL: ".$conector->connect_errno;
}
else {
 $resultado=$conector->query("select * from equipo");
//Sale por pantalla la consulta.
 echo "<table border='15'>";
foreach ($resultado as $equipo) {
  echo "<tr align='center'>
    <td><br>ID:".$equipo['id_equipo']."</td>
    <td><br>LOCAL: <a href=jugadores.php?equipo=".$equipo['local'].">".$equipo['local']."</a></td>
    <td><br>VISITANTE:<a href=equipo-visitante.php?equipo=".$equipo['visitante'].">".$equipo['visitante']."</a></td>
    <td><br>RESULTADO:".$equipo['resultado']."</td>
    <td><br></td>
  </tr>";
  }
  echo "</table>";
}
 ?>
  </body>
</html>
