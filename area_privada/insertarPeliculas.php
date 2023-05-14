<?php

include 'conexion.php';

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
    }



// Obtener datos POST en caso de que existan
if (isset($_GET['titulo'])) {
    $imagen     = $_GET['url_imagen'];
    $titulo  = $_GET['titulo'];
    $year     = $_GET['año'];
    $director     = $_GET['directores'];
    $online       = $_GET['url_ver_online'];
    $descargar       = $_GET['url_descargar'];
    $actores       = $_GET['actores'];
    $actrices       = $_GET['actrices'];
    $guionistas       = $_GET['guionistas'];
    $productores       = $_GET['productores'];
    $bsonora       = $_GET['banda_sonora'];
    $saga       = $_GET['saga'];


// Consulta SQL para obtener los datos de la tabla "personajes"
$sql = "INSERT INTO peliculas (url_imagen, titulo, año, directores, url_ver_online, url_descargar, actores, actrices, guionistas, productores, banda_sonora, saga)
VALUES ('$imagen','$titulo', '$year', '$director', '$online', '$descargar', '$actores', '$actrices', '$guionistas', '$productores', '$bsonora', '$saga');";

// Ejecutar la consulta SQL
$resultado = $conn->query($sql);

}

?>



<form action="crearTablaPeliculas.php">
  <input type="text" name="servername" value ="<?php echo $servername ?>" readonly style="background:grey; display:none">
  <input type="text" name="username" value ="<?php echo $username ?>" readonly style="background:grey; display:none">
  <input type="text" name="password" value ="<?php echo $password ?>" readonly style="background:grey; display:none">
  <input type="text" name="dbname" value ="2000peliculassigloxx_db" readonly style="background:grey; display:none">
  <input type="submit" value="insertar otra película">
</form>
