<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
    //Me conecto con la base de datos.
    $conector=new mysqli ("localhost","root","","liga");
    if ($conector-> connect_errno) {
      echo "Fallo al conectar a MySQL: ".$conector->connect_errno;
    }
    else {
      $equipo=$_GET["equipo"];
    $resultado=$conector->query("select * from jugador where equipo=".$equipo);
    //Sale por pantalla la consulta.
     echo "<table border='15'>";
    foreach ($resultado as $jugador) {
      echo "<tr align='center'>
        <td><br>ID:".$jugador['id_jugador']."</td>
        <td><br>NOMBRE:".$jugador['nombre']."</td>
        <td><br>CIUDAD:".$jugador['apellido']."</td>
        <td><br>WEB:".$jugador['posicion']."</td>
        <td><br>PUNTOS:".$jugador['id_capitan']."</td>
        <td><br>PUNTOS:".$jugador['fecha_alta']."</td>
        <td><br>PUNTOS:".$jugador['salario']."</td>
        <td><br>PUNTOS:".$jugador['equipo']."</td>
        <td><br>PUNTOS:".$jugador['altura']."</td>
        <td><br></td>
      </tr>";
      }
      echo "</table>";
    }
     ?>
  </body>
</html>
