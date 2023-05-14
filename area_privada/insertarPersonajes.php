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

<form action="crearTablaPersonajes.php">
<input type="text" name="servername" value ="<?php echo $servername ?>" readonly style="background:grey; display:none">
  <input type="text" name="username" value ="<?php echo $username ?>" readonly style="background:grey; display:none">
  <input type="text" name="password" value ="<?php echo $password ?>" readonly style="background:grey; display:none">
  <input type="text" name="dbname" value ="2000peliculassigloxx_db" readonly style="background:grey; display:none">
  <input type="submit" value="Insertar otor personaje">
</form>


<p>Si no quieres añadir más personajes pasa al siguiente paso</p>

<form action="crearTablaSagas.php">
  <input type="text" name="servername" value ="<?php echo $servername ?>" readonly style="background:grey; display:none">
  <input type="text" name="username" value ="<?php echo $username ?>" readonly style="background:grey; display:none">
  <input type="text" name="password" value ="<?php echo $password ?>" readonly style="background:grey; display:none">
  <input type="text" name="dbname" value ="2000peliculassigloxx_db" readonly style="background:grey; display:none">
  <input type="submit" value="crear tabla SAGAS">
</form>

