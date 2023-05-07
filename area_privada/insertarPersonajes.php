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
    $personaje  = $_GET['personaje'];
    $genero     = $_GET['genero'];
    $nacimiento     = $_GET['fecha_nacimiento'];
    $fallecimiento       = $_GET['fecha_fallecimiento'];


// Consulta SQL para obtener los datos de la tabla "personajes"
$sql = "INSERT INTO personajes (url_imagen, personaje, genero, fecha_nacimiento, fecha_fallecimiento)
VALUES ('$imagen','$personaje','$genero','$nacimiento','$fallecimiento');";

// Ejecutar la consulta SQL
$resultado = $conn->query($sql);

}

?>

<button><a href="crearTablaPersonajes.php">Insertar otro personaje</a></button>

<p>Si no quieres añadir más personajes pasa al siguiente paso</p>

<h2>Creación de la tabla SAGAS</h2>

<p>Datos fijos de la conexión:</p>
<form action="crearTablaSagas.php">
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
  <input type="submit" value="crear tabla SAGAS">
</form>

