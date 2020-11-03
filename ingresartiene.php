<?php
     include("conexion_db.php");
     $conectar = conectar();

if (isset($_POST['guardar_tiene'])){
        $cod_persona  = $_POST['cod_persona'];
        $cod_pelicula = $_POST['cod_pelicula'];
        $participacion    = $_POST['participacion'];
        
    
    $sql = $conectar->query("INSERT INTO tiene   values ('$cod_persona', '$cod_pelicula', '$participacion')");}


if(!$sql) {
      $_SESSION['message'] = 'ERROR: VERIFIQUE LOS DATOS';
     $_SESSION['message_type'] = 'danger'; 
  }else {
  $_SESSION['message'] = 'PARTICIPACION GUARDADA';
  $_SESSION['message_type'] = 'success'; 
  }

    header('location:crudtiene.php');
?>