<?php
include 'conexion.php';

// Crear conexión
$conn = new mysqli($servername, $username, $password);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
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


<h2>Creación de la tabla PERSONAJES</h2>

<p>Datos fijos de la conexión:</p>
<form action="crearTablaPersonajes.php">
    <label for="servername">Servidor: </label>
    <input type="text" id="servername" name="servername" value ="<?php echo $servername ?>" readonly>
    <br>
    <label for="username">Usuario: </label>
    <input type="text" id="username" name="username" value ="<?php echo $username ?>" readonly>
    <br>
    <label for="password">Password: </label>
    <input type="text" id="password" name="password" value ="<?php echo $password ?>" readonly>
    <br>
    <label for="dbname">Nombre Base Datos: </label>
    <input type="text" id="dbname" name="dbname" value ="2000peliculassigloxx_db" readonly>
    <br>
    <input type="submit" Value="Crear Tabla PERSONAJES">
</form>

