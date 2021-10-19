<?php 
    include("conexion_cursos.php");
    $con=conectar();


    $sql="SELECT *  FROM cursos";
    $query=mysqli_query($con,$sql);
   



    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Cursos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="icon" href="../dashboard/img/icon.png"> 

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../dashboard/css/dashboard.css">
        

    </head>
    
<body style="background-color: #E8F5FF;">
    <body>

    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra" style="background-color: #46A2FD;">
                <h4 class="text-light"><img class="logo" src="../dashboard/img/icon.png" alt=""> PLATAFORMA INSTITUCIONAL </h4>
            </div>
            <div class="col-4 text-right barra" style="background-color: #46A2FD;">
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


<table width="100%">
    <tr>       
        <th></th>
        <th></th>
        
        
        <th >
            <h1>Lista de Cursos</h1>
        </th> 
        <th><label for="busqueda">INGRESAR</label><br><a href="ingresar_cursos.php" class="btn btn-info">INGRESAR CURSO</a></th>


        <th ><form  action="buscar_cursos.php" method="get" ><br>
            <label for="busqueda">BUSCAR</label>
            <input  type="text" name="busqueda" id="busqueda" class="form-control mb-3" class="btn_search" placeholder="Id, Nombre curso, Id año academico,Id doc">
        <th><br><input type="submit"  value="BUSCAR" class="btn btn-info"></th>
            </form>     
        <th></th>
        <th></th>
        </tr>
</table>

              <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id_curso</th>
                                         <th>Nombre</th>
                                         <th>año academico</th>
                                         <th>id docente</th>
                                         <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                         while($row=mysqli_fetch_array($query))
                                            {
                                        ?>
                                            <tr>
                                                <th><?php echo $row['id_curso']?></th>
                                                <th><?php echo $row['nom_curso']?></th>
                                                <th><?php echo $row['id_ano_acad']?></th>
                                                <th><?php echo $row['id_doc']?></th>


                                                <th><a href="actualizar_cursos.php?id_curso=<?php echo $row['id_curso'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete_cursos.php?id_curso=<?php echo $row['id_curso'] ?> " class="btn btn-danger">Eliminar</a></th> 
                                                 </tr>
                                    
                                                <?php 
                                            }
                                        ?>
                                      
                                </tbody>
                            </table>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/646c794df3.js"></script>
</body>

</html>
