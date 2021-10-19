<?php 
    include("conexion_acu.php");
    $con=conectar();


    $sql="SELECT *  FROM acudiente ";
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

 <form action="insertar_acu.php" method="POST">

<label for="id_acud">ID ACUDIENTE</label>
    <input type="text" class="form-control mb-3" name="id_acud" placeholder="Id" id="id_acud">

<label for="tipo_doc">TIPO DE DOCUMENTO</label>
    <select class="form-control mb-3" name="tipo_doc" id="tipo_doc">
        <option value="">Tipo de documento</option>
        <option value="1">Tarjeta de identidad</option>
        <option value="2">Cedula de ciudadania</option>
        <option value="3">Cedula de extranjeria</option>
    </select>

<label for="nom_acu">NOMBRE</label>
    <input type="text" class="form-control mb-3" name="nom_acu" placeholder="Nombres" id="nom_acu">
<label for="ape_acu">APELLIDO</label>
    <input type="text" class="form-control mb-3" name="ape_acu" placeholder="Apellidos" id="ape_acu">
<label for="parentesco">PARENTESCO</label>    
    <select class="form-control mb-3" name="parentesco" id="parentesco" >
        <option value="">Parentesco</option>
        <option value="Madre">Madre</option>
        <option value="Padre">Padre</option>
        <option value="Abuelo/a">Abuelo/a</option>
        <option value="Tio/a">Tio/a</option>
    </select>
<label for="dir_acu">DIRECCIÓN</label>    
    <input type="text" class="form-control mb-3" name="dir_acu" placeholder="Dirección" id="dir_acu">

<label for="id_pais">PAIS</label>    
    <select class="form-control mb-3" name="id_pais" id="id_pais" >
        <option value="">Seleccione un pais</option>
        <option value="1">Colombia</option>
        <option value="2">Mexico</option>
        <option value="3">EEUU</option>
    </select>

<label for="id_ciu">CIUDAD</label>    
    <select class="form-control mb-3" name="id_ciu" id="id_ciu">
        <option value="">Seleccione una ciudad</option>
        <option value="1">Bogota</option>
        <option value="2">Girardot</option>
        <option value="3">Flandes</option>
        <option value="4">Tocaima</option>
        <option value="5">Ricaurte</option>
    </select>

<label for="tel_acu">TELEFONO</label>    
    <input type="text" class="form-control mb-3" name="tel_acu" placeholder="Teléfono" id="tel_acu">    
<label for="id_est">ID ESTUDIANTE</label>
    <input type="text" class="form-control mb-3" name="id_est" placeholder="Id" id="id_est">       
                            
<div align="center">
   <input type="submit" class="btn btn-primary" name="submit"><br><br>
</div>
            </form>
               </div>

                   
</body>
</html>