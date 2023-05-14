<?php include 'includes/header.php' ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "2000peliculassigloxx_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos de la tabla "alumnos"
$sql = "SELECT url_imagen, titulo, año, directores FROM peliculas";

// Ejecutar la consulta SQL
$resultado = $conn->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
?>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar.." title="Escriba el valor a buscar">

<?php
  // Crear la tabla HTML
  echo '<table class="table table-bordered border-primary table-light table-responsive">';
  echo '<thead>';
  echo '<tr>';
  echo '<th scope="col">Imagen</th>';
  echo '<th scope="col">Título</th>';
  echo '<th scope="col">Año</th>';
  echo '<th scope="col">Director</th>';
  echo '<th scope="col"></th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  // Recorrer los resultados y mostrarlos en la tabla HTML
  while($fila = $resultado->fetch_assoc()) {
    echo '<tr>';
    echo '<td><img src="'. $fila["url_imagen"].'" class="imgFicha" alt="'.$fila["titulo"].'"></td>';
    echo '<td><h3>'.$fila["titulo"].'</h3></td>';
    echo '<td><p>'.$fila["año"].'</p></td>';
    echo '<td><p>'.$fila["directores"].'</p></td>';
    echo '';
    // echo '<td><a href="ficha.php?id=" '. $fila["id"] .' ">Ver ficha</a></td>';
    echo '</tr>';      
          
  }

  // Cerrar la tabla HTML
  echo '</tbody>';
  echo '</table>';
} else {
  echo "No se encontraron resultados";
}

// Cerrar la conexión
$conn->close();
?>

<?php include 'includes/footer.php' ?>
