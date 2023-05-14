<?php
include 'conexion.php';

// Crear conexión
$conn = new mysqli($servername, $username, $password);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
  die("Conexión fallida: ".$conn->connect_error." <a href='index.php'> << Volver atrás</a>");
}

// Crear la base de datos si no existe
$sql = "CREATE DATABASE IF NOT EXISTS 2000peliculassigloxx_db";
if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Base de datos 2000peliculassigloxx_db se ha creado correctamente, o ya existía')</script>";
} else {
  echo "<script>alert('Error creando la base de datos: '. $conn->error' ')</script>";
}
// Cerrar la conexión
$conn->close();

?>

<form action="crearTablaPersonajes.php">
    <input type="text" name="servername" value ="<?php echo $servername ?>" readonly style="background:grey; display:none">
    <input type="text" name="username" value ="<?php echo $username ?>" readonly style="background:grey; display:none">
    <input type="text" name="password" value ="<?php echo $password ?>" readonly style="background:grey; display:none">
    <input type="text" name="dbname" value ="2000peliculassigloxx_db" readonly style="background:grey; display:none">
    <input type="submit" Value="Crear Tabla PERSONAJES">
</form>

