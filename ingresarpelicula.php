<?php
     include("conexion_db.php");
     $conectar = conectar();

if (isset($_POST['guardar_pelicula'])){
        $cod_pelicula  = $_POST['cod_pelicula'];
        $nomb_pelicula = $_POST['nomb_pelicula'];
        $genero        = $_POST['genero'];
        $clasificacion = $_POST['clasificacion'];
    
    $sql = $conectar->query("INSERT INTO peliculas (cod_pelicula, nomb_pelicula, genero, clasificacion) 
                values ('$cod_pelicula', '$nomb_pelicula', '$genero', '$clasificacion')");}


if(!$sql) {
      $_SESSION['message'] = 'ERROR: VERIFIQUE LOS DATOS';
     $_SESSION['message_type'] = 'danger'; 
  }else {
  $_SESSION['message'] = 'PELICULA GUARDADA';
  $_SESSION['message_type'] = 'success'; 
  }

    header('location:crudpelicula.php');
?>