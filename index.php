<?php

$titulo_pagina = 'Registro Horas CUCEI Mobile';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php echo $titulo_pagina ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        .container {
            margin-left: 5vw;
            margin-right: 5vw;
            flex: 1 0 auto;
        }

        .titulo-bienvenida{
            padding-top: 2vw;
            text-align: center; 
        }

        .columna {
            flex: 1; /* Las columnas ocupan el mismo espacio */
            padding-top: 2vw; /* Espacio entre las columnas y el contenido */
            justify-content: center; /* Centra el contenido horizontalmente */
            align-items: center; /* Centra el contenido verticalmente */
        }

        .input-codigo {
            width: 100%; /* Ancho del input */
            padding: 10px;
            border: 1px solid #ccc; /* Borde para visualización */
        }

        .consideraciones {
            padding-top: 5vw;
        }
    </style>

</head>
  <body>
    <!-- INICIO NAVBAR -->
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <!-- CONTEINER NAVBAR -->
        <div class="container-fluid">
            <!-- LOCO UDG CUCEI -->
            <a class="navbar-brand" href="./index.php">
                <img src="./imagenes/logo-udg-cucei.png" alt="Logo" width="350" height="100" class="d-inline-block align-text-top">
            </a>

            <!-- LOCO CUCEI MOBILE -->
            <a class="d-flex" href="./index.php">
                <img src="./imagenes/cuceimobilelogo.png" alt="Logo" width="350" height="100" class="d-inline-block align-text-top">
            </a>
        </div>
    </nav>

    <!-- INICIO DE CONTENIDO -->
    <div class="container">
        <div class="titulo-bienvenida"> 
            <p class="h2">SISTEMA DE REGISTRO DE HORAS</p>
        </div>
        <!-- DIVIDE EL CONTENIDO EN COLUMNAS -->
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0 columna">
                <form class="d-flex" role="search">
                    <input class="form-control me-2 input-codigo" type="search" placeholder="CÓDIGO" aria-label="Search">
                    <button class="btn btn-outline-info" type="submit">Login</button>
                    <!-- <button class="btn btn-outline-info" type="submit">Search</button> -->
                </form>
                <div class="consideraciones">
                    <p class="h3">PUNTOS A TOMAR EN CUENTA</p>
                    <ul class="list">
                        <p class="h5"><li>Sesiones con mas de 8 horas de duración no serán registradas por el sistema.</li></p>
                        <p class="h5"><li>Todos los registros son para uso exclusivo de esta dependencia. </li></p>
                        <p class="h5"><li>Las horas extra no se deben registrar por medio de este sitio.</li></p>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 columna">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Alumno</th>
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Tiempo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">David Valadez Gutierrez</th>
                                    <td>217450107</td>
                                    <td>2:50:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <span class="mb-3 mb-md-0 text-body-secondary">© UDG Todos los derechos reservados | Powered by [_cuceimobile]</span>
        </div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>