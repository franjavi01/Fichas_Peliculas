<?php

include 'conexion.php';

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
    }



// Obtener datos POST en caso de que existan
if (isset($_GET['personaje'])) {
    $imagen     = $_GET['url_imagen'];
    $saga       = $_GET['saga'];
    
// Consulta SQL para obtener los datos de la tabla "personajes"
$sql = "INSERT INTO sagas (url_imagen, saga)
VALUES ('$imagen','$saga');";

// Ejecutar la consulta SQL
$resultado = $conn->query($sql);

}

?>

<button><a href="crearTablaSagas.php">Insertar otra saga</a></button>

<p>Si no quieres añadir más sagas pasa al siguiente paso</p>

<h2>Creación de la tabla PELICULAS</h2>

<p>Datos fijos de la conexión:</p>
<form action="crearTablaPeliculas.php">
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
  <input type="submit" value="crear tabla PELICULAS">
</form>