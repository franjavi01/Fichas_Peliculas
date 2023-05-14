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


// Ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
echo "<script>alert('Tabla PELICULAS se ha creado correctamente dentro de la base de datos 200PELICULASSIGLOXX_DB, o ya existía')</script>";
} else {
echo "<script>alert('Error al crear la tabla: ' . $conn->error.' ')</script>";
}

?>

<h2>Insertar datos en la tabla PELICULAS</h2>

<form action="insertarPeliculas.php">
  <input type="text" name="servername" value ="<?php echo $servername ?>" readonly style="background:grey; display:none">
  <input type="text" name="username" value ="<?php echo $username ?>" readonly style="background:grey; display:none">
  <input type="text" name="password" value ="<?php echo $password ?>" readonly style="background:grey; display:none">
  <input type="text" name="dbname" value ="2000peliculassigloxx_db" readonly style="background:grey; display:none">
  <label for="imagen">Imagen: </label>
  <input type="text" id="imagen"  name="url_imagen">
  <br>
  <label for="pelicula">Título de la película: </label>
  <input type="text" id="pelicula"  name="titulo">
  <br>
  <label for="year">Año: </label>
  <input type="number" id="year" name="año">
  <br>
  <label>Director:</label><br>
  <?php
  $sql = "SELECT personaje FROM personajes";
  $resultado = $conn->query($sql);
  if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
  echo '<input type="checkbox" id="directores" name="directores" value="'.$fila["personaje"].'"><label for="directores">'.$fila["personaje"].'</label>';
  echo '<br>';
    }
  }
  ?>
  <br>
  <label>Actores:</label><br>
  <?php
  $sql = "SELECT personaje FROM personajes WHERE genero ='masculino'";
  $resultado = $conn->query($sql);
  if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
  echo '<input type="checkbox" id="actores" name="actores" value="'.$fila["personaje"].'"><label for="actores">'.$fila["personaje"].'</label>';
  echo '<br>';
    }
  }
  ?>
  <br>
  <label>Actrices:</label><br>
  <?php
  $sql = "SELECT personaje FROM personajes WHERE genero ='femenino'";
  $resultado = $conn->query($sql);
  if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
  echo '<input type="checkbox" id="actrices" name="actrices" value="'.$fila["personaje"].'"><label for="actrices">'.$fila["personaje"].'</label>';
  echo '<br>';
    }
  }
  ?>
  <br>
  <label>Guionistas:</label><br>
  <?php
  $sql = "SELECT personaje FROM personajes";
  $resultado = $conn->query($sql);
  if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
  echo '<input type="checkbox" id="guionistas" name="guionistas" value="'.$fila["personaje"].'"><label for="guionistas">'.$fila["personaje"].'</label>';
  echo '<br>';
    }
  }
  ?>
  <br>
  <label>Productores:</label><br>
  <?php
  $sql = "SELECT personaje FROM personajes";
  $resultado = $conn->query($sql);
  if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
  echo '<input type="checkbox" id="productores" name="productores" value="'.$fila["personaje"].'"><label for="productores">'.$fila["personaje"].'</label>';
  echo '<br>';
    }
  }
  ?>
  <br>
  <label>Banda Sonora:</label><br>
  <?php
  $sql = "SELECT personaje FROM personajes";
  $resultado = $conn->query($sql);
  if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
  echo '<input type="checkbox" id="banda_sonora" name="banda_sonora" value="'.$fila["personaje"].'"><label for="banda_sonora">'.$fila["personaje"].'</label>';
  echo '<br>';
    }
  }
  ?>
  <br>
  <label>Saga:</label><br>
  <?php
  $sql = "SELECT saga FROM sagas";
  $resultado = $conn->query($sql);
  if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
  echo '<input type="checkbox" id="saga" name="saga" value="'.$fila["saga"].'"><label for="saga">'.$fila["saga"].'</label>';
  echo '<br>';
    }
  }
  ?>
  <br>
  <label for="ver">Ver Online: </label>
  <input type="text" id="ver"  name="url_ver_online">
  <br>
  <label for="descargar">Descargar: </label>
  <input type="text" id="pelicula"  name="url_descargar">
  <br> 
  <input type="submit">
</form>


<?php
$conn->close();
?>


