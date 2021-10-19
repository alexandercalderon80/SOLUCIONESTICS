<?php 
    include("conexion_asignaturas.php");
    $con=conectar();

$id_asig =$_GET['id_asig'];

$sql="SELECT * FROM asignaturas WHERE id_asig='$id_asig'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Asignaturas-actualizar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="icon" href="../dashboard/img/icon.png">
        
    </head>
   <body style="background-color: #E8F5FF;">                


<h1 align="center" > 
        <p> 
        <img src="../dashboard/img/icon.png" alt="Esta imagen es el logo del SENA" align="center" width="120" height="120"/> 
       </p>ACTUALIZACIÓN DE DATOS
    </h1>

<div style="width: 50%; margin: 20px 25%; ">

                    <form action="update_asignaturas.php" method="POST">
                    
    <input type="hidden" name="id_asig" value="<?php echo $row['id_asig']  ?>">


<label for="nom_asig">NOMBRE ASIGNATURA</label>
    <input  class="form-control mb-3" name="nom_asig" id="nom_asig"  value="<?php echo $row['nom_asig']  ?>">

    <label for="int_horaria">INT HORARIA</label>
    <input  class="form-control mb-3" name="int_horaria" id="int_horaria"  value="<?php echo $row['int_horaria']  ?>">
<label for="est_asig">ESTADO</label>
    <select type="text" class="form-control mb-3" name="est_asig" id="est_asig"  value="<?php echo $row['est_asig']  ?>">   
        <option value="<?php echo $row['est_asig'] ?>">Seleccione una opción</option>
        <option value="A">Activa</option>
        <option value="I">Inactiva</option>
       </select>
<label for="id_area">ÁREA</label>   
    <select type="text" class="form-control mb-3" name="id_area" id="id_area" value="<?php echo $row['id_area']  ?>">
        <option value="<?php echo $row['id_area']  ?>">Seleccione una opción</option>
        <option value="1">Matemáticas</option>
        <option value="2">Lenguaje</option>
        <option value="3">Ciencias sociales</option>
        <option value="4">Ciencias naturales</option>
        <option value="5">Inglés</option>
    </select>

         
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>