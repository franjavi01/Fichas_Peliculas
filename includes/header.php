<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichas de películas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css?<?php echo date('U'); ?>">
</head>

<body>
    <header>
        <div class="cabecera">
            <h1 class="text-center">2000 películas siglo XX</h1>
            <h3 class="text-center">Si eres amante del cine clásico, este es tu sitio</h3>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary z-1  container-fluid">
        <a class="navbar-brand" href="index.php"><img src="./imagenes/logo.jpg" class="logo" alt="logo"></a>
        <div class="lineas">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#opciones">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="opciones">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                            <button class="btn btn-light" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </li>
                    <li class="nav-item">
                    <div class="container-fluid">
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" onclick="dia()" id="btnradio1" autocomplete="off" checked>
                        <label class="btn btn-outline-light" for="btnradio1"><i class="bi bi-brightness-high-fill"></i></label>

                        <input type="radio" class="btn-check" name="btnradio" onclick="noche()" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-light" for="btnradio2"><i class="bi bi-moon-fill"></i></label>
                    </div>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="opciones">    
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="peliculas.php">Películas</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="personajes.php">Personajes</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="sagas.php">Sagas</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="area_privada" target="_blank" onclick="ventanaSecundaria()">Area Privada</a>
                        </div>
                    </li>
                </ul>
            </div>
            </div>



        </nav>
       


    </header>
    <main>