<?php 
    include("conexion_doc.php");
    $con=conectar();


    $sql="SELECT *  FROM docentes";
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
 <form action="insertar_doc.php" method="POST">

<label for="id_doc">ID DOCENTE</label>
    <input type="text" class="form-control mb-3" name="id_doc" placeholder="Id" id="id_doc">
<label for="tipo_doc">TIPO DE DOCUMENTO</label>
    <select class="form-control mb-3" name="tipo_doc" id="tipo_doc">
        <option value="">Tipo de documento</option>
        <option value="1">Tarjeta de identidad</option>
        <option value="2">Cedula de ciudadania</option>
        <option value="3">Cedula de extranjeria</option>
    </select>

<label for="nom_doc">NOMBRES</label>
    <input type="text" class="form-control mb-3" name="nom_doc" placeholder="Nombres" id="nom_doc">

<label for="ape_doc">APELLIDOS</label>
    <input type="text" class="form-control mb-3" name="ape_doc" placeholder="Apellidos" id="ape_doc">
<label for="gen_doc">GENERO</label>    
    <select class="form-control mb-3" name="gen_doc" id="gen_doc" >
        <option value="">Género</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select>

<label for="dir_doc">DIRECCIÓN</label>    
    <input type="text" class="form-control mb-3" name="dir_doc" placeholder="Dirección" id="dir_doc">
<label for="ed_doc">EDAD</label>
    <input type="text" class="form-control mb-3" name="ed_doc" placeholder="Edad" id="ed_doc">
<label for="tel_doc">TELEFONO</label>    
    <input type="tel" class="form-control mb-3" name="tel_doc" placeholder="Teléfono" id="tel_doc">
<label for="em_doc">EMAIL</label>    
    <input type="email" class="form-control mb-3" name="em_doc" placeholder="Email" id="em_doc">

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
<!--         <option value="5">Ricaurte</option>
 -->    </select>

<label for="id_area">ÁREA</label>         
    <select class="form-control mb-3" name="id_area" id="id_area">
        <option value="">Seleccione una opción</option>
        <option value="1">Matemáticas</option>
        <option value="2">Lenguaje</option>
        <option value="3">Ciencias sociales</option>
        <option value="4">Ciencias naturales</option>
        <option value="5">Inglés</option>
</select>  

<label for="id_asig">ASIGNATURA</label>         
    <select class="form-control mb-3" name="id_asig" id="id_asig">
        <option value="">Seleccione una opción</option>
        <option value="1">Algebra</option>
        <option value="2">Geometría</option>
        <option value="3">Lectura</option>
        <option value="4">Geografía</option>
        <option value="5">Historia</option>
        <option value="6">Democracia</option>
        <option value="7">Biologia</option>
        <option value="8">Física</option>
        <option value="9">Química</option>
        <option value="10">Inglés</option>
</select>          
                            
<div align="center">
   <input type="submit" class="btn btn-primary" name="submit"><br><br>
</div>
            </form>
               </div>

                   
</body>
</html>