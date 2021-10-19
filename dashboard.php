<?php

 session_start();

 if(!isset($_SESSION['usuario'])){
    echo ' <script> 
             alert("Por favor debes iniciar sesión");
             window.location= "../login/index.php"
          </script>

          ';
    
    session_destroy();
    die();
 }

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="icon" href="img/icon.png">
</head>

<body >

    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra" style="background-color: #46A2FD;">
                <h4 class="text-light"><img  class="logo" src="img/icon.png" alt=""> PLATAFORMA INSTITUCIONAL </h4>
            </div>
            <div class="col-4 text-center barra" style="background-color: #46A2FD;">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="#" class="px-3 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle user"></i></a>

                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                            <a class="dropdown-item menuperfil cerrar" href="../login/index.php"><i class="fas fa-sign-out-alt m-1"></i>Salir
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                    <a href="../dashboard/dashboard.php"><i class="fas fa-home"></i><span>Inicio</span></a>
                    <a href="../acudientes/acudientes.php"><i class="fas fa-user-tie"></i><span>Acudientes</span></a>
                    <a href="../estudiantes/estudiantes.php"><i class="fas fa-user-graduate"></i><span>Estudiantes</span></a>
                    <a href="../docentes/docentes.php"><i class="fas fa-chalkboard-teacher"></i><span>Docentes</span></a>
                    <a href="../areas/areas.php"><i class="fas fa-book"></i><span>Areas</span></a>
                    <a href="../asignaturas/asignaturas.php"><i class="fas fa-atlas"></i><span>Asignaturas</span></a>
                    <a href="../pais/pais.php"><i class="fas fa-globe-americas"></i><span>Pais</span></a>
                    <a href="../ciudad/ciudad.php"><i class="fas fa-city"></i><span>Ciudad</span></a>
                    <a href="../curso/cursos.php"><i class="fas fa-sort-numeric-up-alt"></i><span>Cursos</span></a>
                    <a href="../logros/logros.php"><i class="fas fa-check"></i><span>Logros</span></a>
                    <a href="../backup/index.php"><i class="fas fa-lock"></i><span>Copia de seguridad</span></a>
                </nav>
            </div>
            <main class="main col">
                    <div class="columna col-lg-12">
                        <img  align="center" src="img/logo.gif" >

                    </div>

                </div>

            </main>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/646c794df3.js"></script>
</body>

</html>
