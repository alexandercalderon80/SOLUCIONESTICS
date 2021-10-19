<?php 
    include("conexion_ciu.php");
    $con=conectar();


    $sql="SELECT *  FROM Ciudad";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);

 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> INGRESAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="icon" href="../dashboard/img/icon.png">
        
    </head>
    
<body style="background-color: #E8F5FF;">
    <h1 align="center" > 
        <p> 
        <img src="../dashboard/img/icon.png" alt="Esta imagen es el logo del SENA" align="center" width="120" height="120"/> 
       </p>INGRESE DATOS
    </h1>


<div style="width: 50%; margin: 20px 25%; ">
 <form action="insertar_ciu.php" method="POST">

<label for="id_ciu">ID CIUDAD</label>
    <input type="text" class="form-control mb-3" name="id_ciu" placeholder="Id" id="id_ciu">

<label for="nom_ciu">NOMBRE DE LA CIUDAD</label>
    <input type="text" class="form-control mb-3" name="nom_ciu" placeholder="Nombres" id="nom_ciu">
         
                            
<div align="center">
   <input type="submit" class="btn btn-primary" name="submit"><br><br>
</div>
            </form>
               </div>

                   
</body>
</html>