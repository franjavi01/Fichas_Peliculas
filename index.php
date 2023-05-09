<?php include 'includes/header.php'; ?>
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

    