<?php include 'includes/header.php'; ?>

<p class="primerParrafo">Aquí tienes las mejores películas clásicas del siglo XX, para ver online y para la descarga. Si eres amante del cine clásico este es tu sitio.</p>
<p>El cine fue inventado por los hermanos Lumiere a finales del siglo XIX. El 28 de diciembre de 1895 proyectan su primera película en la que simplemente se ve a unos obreros saliendo de una fábrica. Los hermanos Lumìere hacen más de 500 películas sin un guión elaborado y sin la participación de actores profesionales, o sea, lo mismo que nosotros podemos hacer actualmente con nuestro móvil. Su intención, más que hacer una gran superprodución, era la de dar a conocer el invento a todo el mundo.</p>
<p>Sin embargo en el siglo IV a.c. los chinos inventan una especie de linterna en la que en su interior llevaba una turbina que se accionaba con el viento o con un mecanismo dentado que giraba una persona. Así daba vueltas una pantalla en la que se encontraban dibujadas una serie de ilustraciones, animales plantas, estrellas, etc, que a su vez, una vela situada en el interior, con su luz traspasaba las ilustraciones que se proyectaba sobre paredes. Todo esto fue un anticipo del invento de los hermanos Lumìere.</p>
<p>A lo largo del siglo XX el invento se fue perfeccionando con el sonido y el color. Ahora el cine es considerado un arte más como la pintura, la escultura o la literatura. Más precisamente es el séptimo arte.</p>
<p>Disfruta de esta web de cine clásico y recuerda nuestro lema: <strong>"Si eres amante del cine clásico este es tu sitio"</strong></p>

<?php 
$miJSON = file_get_contents('FichasPeliculas.json');
$datos = json_decode($miJSON, true);

echo '<div class="container cards">';
echo '<div class="row">';
foreach($datos as $dato){
echo '<div class="card text-center">';
echo '<i class="'.$dato['imagen'].' card-img-top"  alt="'.$dato['titulo'].'"></i>';
echo '<div class="card-body">';
echo '<h3 class="card-title">'.$dato['titulo'].'</h3>';
echo '<p class="card-text">'.$dato['texto'].'</p>';
echo '<a href="'.$dato['enlace'].'" class="btn btn-primary">Entrar</a>';
echo '</div>';
echo '</div>';
}
echo '</div>';
echo '</div>';


?>
<?php include 'includes/footer.php'; ?>

    