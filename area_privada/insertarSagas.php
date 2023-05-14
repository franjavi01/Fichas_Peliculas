<?php

include 'conexion.php';

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
    }



// Obtener datos POST en caso de que existan
if (isset($_GET['saga'])) {
    $imagen     = $_GET['url_imagen'];
    $saga       = $_GET['saga'];
    
// Consulta SQL para obtener los datos de la tabla "personajes"
$sql = "INSERT INTO sagas (url_imagen, saga)
VALUES ('$imagen','$saga');";

// Ejecutar la consulta SQL
$resultado = $conn->query($sql);

}


?>

<form action="crearTablaSagas.php">
  <input type="text" name="servername" value ="<?php echo $servername ?>" readonly style="background:grey; display:none">
  <input type="text" name="username" value ="<?php echo $username ?>" readonly style="background:grey; display:none">
  <input type="text" name="password" value ="<?php echo $password ?>" readonly style="background:grey; display:none">
  <input type="text" name="dbname" value ="2000peliculassigloxx_db" readonly style="background:grey; display:none">
  <input type="submit" value="Insertar otra saga">
</form>

<p>Si no quieres añadir más sagas pasa al siguiente paso</p>

<h2>Creación de la tabla PELICULAS</h2>


<form action="crearTablaPeliculas.php">
  <input type="text" name="servername" value ="<?php echo $servername ?>" readonly style="background:grey; display:none">
  <input type="text" name="username" value ="<?php echo $username ?>" readonly style="background:grey; display:none">
  <input type="text" name="password" value ="<?php echo $password ?>" readonly style="background:grey; display:none">
  <input type="text" name="dbname" value ="2000peliculassigloxx_db" readonly style="background:grey; display:none">
  <input type="submit" value="crear tabla PELICULAS">
</form>