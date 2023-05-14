<?php
include 'conexion.php';

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para crear la tabla "personajes" si no existe previamente
$sql = "CREATE TABLE IF NOT EXISTS personajes (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  url_imagen VARCHAR(255) NOT NULL,
  personaje VARCHAR(255) NOT NULL,
  genero VARCHAR(255) NOT NULL,
  fecha_nacimiento DATE NOT NULL,
  fecha_fallecimiento DATE
  )";

// Ejecutar la consulta SQL personajes
if ($conn->query($sql) === TRUE) {
echo "<script>alert('Tabla PERSONAJES se ha creado correctamente dentro de la base de datos 200PELICULASSIGLOXX_DB, o ya existía')</script>";
} else {
echo "<script>alert('Error al crear la tabla: ' . $conn->error.' ')</script>";
}

$conn->close();

?>

<h2>Insertar datos en la tabla PERSONAJES</h2>

<form action="insertarPersonajes.php">
  <input type="text" name="servername" value ="<?php echo $servername ?>" readonly style="background:grey; display:none">
  <input type="text" name="username" value ="<?php echo $username ?>" readonly style="background:grey; display:none">
  <input type="text" name="password" value ="<?php echo $password ?>" readonly style="background:grey; display:none">
  <input type="text" name="dbname" value ="2000peliculassigloxx_db" readonly style="background:grey; display:none">
  <label for="imagen">Imagen: </label>
  <input type="text" id="imagen"  name="url_imagen">
  <br>
  <label for="personaje">Personaje: </label>
  <input type="text" id="personaje"  name="personaje">
  <br>
  <label>Genero:</label>
  <input type="radio" id="masculino" name="genero" value="masculino"><label for="masculino">Masculino</label>
  <input type="radio" id="femenino" name="genero" value="femenino"><label for="femenino">Femenino</label>
  <br>
  <label for="nacimiento">Fecha de nacimiento: </label>
  <input type="date" id="nacimiento"  name="fecha_nacimiento">
  <br>
  <label for="fallecimiento">Fecha de fallecimiento: </label>
  <input type="date" id="fallecimiento"  name="fecha_fallecimiento">
  <br>
  <input type="submit" value="Insertar personaje">
</form>

<p>Si no quieres insertar datos en la tabla PERSONAJES, vete al siguiente paso:</p>

<form action="crearTablaSagas.php">
  <input type="text" name="servername" value ="<?php echo $servername ?>" readonly style="background:grey; display:none">
  <input type="text" name="username" value ="<?php echo $username ?>" readonly style="background:grey; display:none">
  <input type="text" name="password" value ="<?php echo $password ?>" readonly style="background:grey; display:none">
  <input type="text" name="dbname" value ="2000peliculassigloxx_db" readonly style="background:grey; display:none">
  <input type="submit" value="crear tabla SAGAS">

