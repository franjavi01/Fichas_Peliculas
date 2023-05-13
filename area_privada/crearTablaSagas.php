<?php
include 'conexion.php';

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para crear la tabla "sagas" si no existe previamente
$sql = "CREATE TABLE IF NOT EXISTS sagas (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  url_imagen VARCHAR(255) NOT NULL,
  saga VARCHAR(255) NOT NULL
 )";

// Ejecutar la consulta SQL sagas
if ($conn->query($sql) === TRUE) {
echo "<script>alert('Tabla SAGAS dentro de la base de datos 200PELICULASSIGLOXX_DB se ha creado correctamente, o ya existía')</script>";
} else {
echo "<script>alert('Error al crear la tabla: ' . $conn->error.' ')</script>";
}

$conn->close();

?>

<h2>Insertar datos en la tabla SAGAS</h2>

<form action="insertarSagas.php">
  <label for="servername">Servidor: </label>
  <input type="text" id="servername" name="servername" value ="<?php echo $servername ?>" readonly style="background:grey;">
  <br>
  <label for="username">Usuario: </label>
  <input type="text" id="username" name="username" value ="<?php echo $username ?>" readonly style="background:grey;">
  <br>
  <label for="password">Password: </label>
  <input type="text" id="password" name="password" value ="<?php echo $password ?>" readonly style="background:grey;">
  <br>
  <label for="dbname">Nombre Base Datos: </label>
  <input type="text" id="dbname" name="dbname" value ="2000peliculassigloxx_db" readonly style="background:grey;">
  <br>
  <label for="imagen">Imagen:</label>
  <input type="text" id="imagen" name="url_imagen">
  <br>
  <label for="saga">Nombre de la saga:</label>
  <input type="text" id="saga" name="saga">
  <br>
  <input type="submit" value="insertar saga">
</form>

