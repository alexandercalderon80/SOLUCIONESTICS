<?php 
    include("conexion_logros.php");
    $con=conectar();

$id_logro=$_GET['id_logro'];

$sql="SELECT * FROM logros WHERE id_logro='$id_logro'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Logros-actualizar</title>
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
                    <form action="update_logros.php" method="POST">
                    
    <input type="hidden" name="id_logro" value="<?php echo $row['id_logro']  ?>">


<label for="nom_logro">Logro</label>
    <input  class="form-control mb-3" name="nom_logro" id="nom_logro"  value="<?php echo $row['nom_logro']  ?>">

<label for="per_logro">Periodo</label>
    <select type="text" class="form-control mb-3" name="per_logro" id="per_logro"  value="<?php echo $row['per_logro']  ?>">   
        <option value="<?php echo $row['per_logro'] ?>">Seleccione una opción</option>
        <option value="1">Primero</option>
        <option value="2">Segundo</option>
        <option value="3">Tercero</option>
        <option value="4">Cuarto</option>
       </select>

<label for="id_ano_esc">Año escolar</label>
    <select type="text" class="form-control mb-3" name="id_ano_esc" id="id_ano_esc"  value="<?php echo $row['id_ano_esc']  ?>">   
        <option value="<?php echo $row['id_ano_esc'] ?>">Seleccione una opción</option>
        <option value="1">2020</option>
        <option value="2">2021</option>esc
       </select>


                               
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>