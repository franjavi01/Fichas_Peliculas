<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichas de películas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
        </div>
        <div class="container-fluid">
            <a class="navbar-brand" href="peliculas.php">Películas</a>
        </div>
        <div class="container-fluid">
            <a class="navbar-brand" href="personajes.php">Personajes</a>
        </div>
        <div class="container-fluid">
            <a class="navbar-brand" href="sagas.php">Sagas</a>
        </div>
        <div class="container-fluid">
            <a class="navbar-brand" href="area_privada" target="_blank" onclick="ventanaSecundaria()">Area privada</a>
        </div>
        <div class="container-fluid">
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" onclick="dia()" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="btnradio1"><i class="bi bi-brightness-high-fill"></i></label>

            <input type="radio" class="btn-check" name="btnradio" onclick="noche()" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-prymary" for="btnradio2"><i class="bi bi-moon-fill"></i></label>
        </div>
        </div>
        
</nav>
        <!-- <button onclick="ventanaSecundaria()">Area Privada</button> -->


        <!-- <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" onclick="dia()" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="btnradio1"><i class="bi bi-brightness-high-fill"></i></label>

            <input type="radio" class="btn-check" name="btnradio" onclick="noche()" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio2"><i class="bi bi-moon-fill"></i></label>
        </div> -->


    </header>
    <main>