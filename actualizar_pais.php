<?php 
    include("conexion_pais.php");
    $con=conectar();

$id_pais=$_GET['id_pais'];

$sql="SELECT * FROM pais WHERE id_pais='$id_pais'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Pais-actualizar</title>
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
                    <form action="update_pais.php" method="POST">
                    
    <input type="hidden" name="id_pais" value="<?php echo $row['id_pais']  ?>">


<label for="nom_pais">NOMBRE DE PAIS</label>
    <input type="text" class="form-control mb-3" name="nom_pais" id="nom_pais"  value="<?php echo $row['nom_pais']  ?>">

                               

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>