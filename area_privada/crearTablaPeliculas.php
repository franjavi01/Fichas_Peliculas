<?php
include 'conexion.php';

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para crear la tabla "peliculas" si no existe previamente
$sql = "CREATE TABLE IF NOT EXISTS peliculas (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  url_imagen VARCHAR(255) NOT NULL,
  titulo VARCHAR(255) NOT NULL,
  año INT(4) NOT NULL,
  directores VARCHAR(255),
  url_ver_online VARCHAR(255),
  url_descargar VARCHAR(255),
  actores VARCHAR(255),
  actrices VARCHAR(255),
  guionistas VARCHAR(255),
  productores VARCHAR(255),
  banda_sonora VARCHAR(255),
  saga VARCHAR(255)
  )";


// Ejecutar la consulta SQL personajes
if ($conn->query($sql) === TRUE) {
echo "<script>alert('Tabla PELICULAS se ha creado correctamente dentro de la base de datos 200PELICULASSIGLOXX_DB, o ya existía')</script>";
} else {
echo "<script>alert('Error al crear la tabla: ' . $conn->error.' ')</script>";
}







$conn->close();



?>

<h2>Insertar datos en la tabla PELICULAS</h2>

<form action="insertarPeliculas.php">
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
  <label for="imagen">Imagen: </label>
  <input type="text" id="imagen"  name="url_imagen">
  <br>
  <label for="pelicula">Título de la película: </label>
  <input type="text" id="pelicula"  name="titulo">
  <br>
  <label for="year">Año: </label>
  <input type="number" id="year" name="año">
  <br>
  <label for="director">Director: </label>
  <input type="checkbox" id="director"  name="directores" value="<?php ?>">
  <br>
  <label for="fallecimiento">Fecha de fallecimiento: </label>
  <input type="date" id="fallecimiento"  name="fecha_fallecimiento">
  <br>
  <input type="submit" value="Insertar personaje">
</form>

