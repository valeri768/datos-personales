<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "ejemplo";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);

?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario</title>
</head>
<style>
  body {
    background-image: url('fonfo.jpeg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
    label {
    color: white;
  }
 .wrapper{
top: 50%;
position: absolute;
left: 50%;
transform: translate(-50%,-50%);
width: 350px;
height: 350px;
text-align: center;
border: 1px solid rgb(241, 241, 241);
border-radius: 12px; padding: 10px 20px;
background: transparent;
backdrop-filter: blur(6px);
box-shadow: 5px 5px 10px 0 rgba(0, 0, 0, 0.5);
}
.wrapper h2{
font-size: 30px;
color:#fffefe
} 
</style>

<div class="wrapper">
<h2>Datos Personales</h2>
<br>
<form action="#" name="ejemplo" method="post">

<label for="nombre">Nombre:</label>
<input type="text" name="nombre" placeholder="nombre">
<br><br>

<label for="apellido">Apellido:</label>
<input type="text" name="apellido" placeholder="apellido">
<br><br>

  <label for="grado">Grado:</label>
  <input type="text" name="grado" placeholder="grado">
<br><br>
  <label for="grupo">Grupo:</label>
  <input type="text" name="grupo" placeholder="grupo">
<br><br>

<label for="correo">Correo electrónico:</label>
<input type="email" name="correo" placeholder="correo">
<br><br>

<label for="telefono">Número de teléfono:</label>
<input type="text" name="telefono" placeholder="telefono">
<br><br>
<input type="submit" name="registro">
<input type="reset">

</form>
</div>
</body>


<?php

  if(isset($_POST['registro'])){
      
      $nombre= $_POST['nombre'];
	  $apellido= $_POST['apellido'];
	  $grado = $_POST['grado'];
      $grupo = $_POST['grupo'];
      $correo = $_POST['correo'];
      $telefono = $_POST['telefono'];
	  
	  
      
      $insertarDatos = "INSERT INTO datos VALUES ('$nombre','$apellido','$grado','$grupo','$correo','$telefono','')";
      
      $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);
  }
?>