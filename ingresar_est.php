<?php 
    include("conexion_est.php");
    $con=conectar();


    $sql="SELECT *  FROM estudiantes";
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
 <form action="insertar_est.php" method="POST">

<label for="id_est">ID ESTUDIANTE</label>
    <input type="text" class="form-control mb-3" name="id_est" placeholder="Id" id="id_est">
<label for="tipo_doc">TIPO DE DOCUMENTO</label>
    <select class="form-control mb-3" name="tipo_doc" id="tipo_doc">
        <option value="">Tipo de documento</option>
        <option value="1">Tarjeta de identidad</option>
        <option value="2">Cedula de ciudadania</option>
        <option value="3">Cedula de extranjeria</option>
    </select>

<label for="nom_est">NOMBRE</label>
    <input type="text" class="form-control mb-3" name="nom_est" placeholder="Nombres" id="nom_est">
<label for="ape_est">APELLIDO</label>
    <input type="text" class="form-control mb-3" name="ape_est" placeholder="Apellidos" id="ape_est">
<label for="ed_est">EDAD</label>
    <input type="text" class="form-control mb-3" name="ed_est" placeholder="Edad" id="ed_est">
<label for="fecnac_est">FECHA DE NACIMIENTO</label>    
    <input type="date" class="form-control mb-3" name="fecnac_est" placeholder="Fecha de nacimiento" id="fecnac_est">

<label for="gen_est">GENERO</label>    
    <select class="form-control mb-3" name="gen_est" id="gen_est" >
        <option value="">Género</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select>

<label for="dir_est">DIRECCIÓN</label>    
    <input type="text" class="form-control mb-3" name="dir_est" placeholder="Dirección" id="dir_est">
<label for="tel_est">TELEFONO</label>    
    <input type="text" class="form-control mb-3" name="tel_est" placeholder="Teléfono" id="tel_est">
<label for="em_est">EMAIL</label>    
    <input type="email" class="form-control mb-3" name="em_est" placeholder="Email" id="em_est">

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

<label for="id_curso">CURSO</label>         
    <select class="form-control mb-3" name="id_curso" id="id_curso">
        <option value="">Curso</option>
        <option value="1101">1101</option>
        <option value="1102">1102</option>
        <option value="1103">1103</option>
        <option value="1104">1104</option>
</select>            
                            
<div align="center">
   <input type="submit" class="btn btn-primary" name="submit"><br><br>
</div>
            </form>
               </div>

                   
</body>
</html>