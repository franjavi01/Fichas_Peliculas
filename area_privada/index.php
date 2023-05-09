<?php
// aquí el usuario y la contraseña buena:
$usuarioValido="admin";
$passwordValido="admin";

//if(isset($_POST['usuario']) && isset($_POST['pass'])){
if(isset($_POST['username'])){
    $usuario=$_POST['username'];
    $password=$_POST['password'];

    if($usuario === $usuarioValido && $passwordValido===$password){
    
    session_start();
    // Guardar datos de sesión
    $_SESSION['username'] =$usuario;

    echo "<script>alert('";
    echo "Hola ".$_SESSION["username"]. " has iniciado la sesión correctamente";
    echo "')</script>";
    echo '<form action="crearDB.php">
    <label for="servername">Servidor: </label>
    <input type="text" id="servername" name="servername" required>
    <br>
    <label for="username">Usuario: </label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Password: </label>
    <input type="text" id="password" name="password"> *(Si no hay password dejar este campo en blanco)
    <br>
    <label for="dbname">Nombre Base Datos: </label>
    <input type="text" id="dbname" name="dbname" value="2000peliculassigloXX_db" readonly>
    <br>
    <input type="submit" Value="Crear Base Datos">
</form>'; 
    

    }

    else{
        echo "<script>alert('La contraseña es incorrecta')</script>";  
            
    }
}

else{
?>
    <form action="" method="post">
    
    <label for="usarname">Usuario:</label>
    <input type="text" name="username" id="usarname"><br>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password"><br>

    <input type="submit">
    </form>

    <a href="recuperacion.php">He olvidado la contraseña</a>

    <?php
}   

?>



