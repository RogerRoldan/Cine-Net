<?php
     include("conexion_db.php");
     $conectar = conectar();

if (isset($_POST['guardar_cartelera'])){
        $cod_pelicula  = $_POST['cod_pelicula'];
        $cod_sala = $_POST['cod_sala'];
        $horario    = $_POST['horario'];
        $f1 =$_POST['fecha'];
        $fecha=date("d/m/Y", strtotime($f1));
    
    $sql = $conectar->query("INSERT INTO cartelera   values ('$cod_pelicula', '$cod_sala', '$horario', '$fecha')");}


if(!$sql) {
      $_SESSION['message'] = 'ERROR: VERIFIQUE LOS DATOS';
     $_SESSION['message_type'] = 'danger'; 
  }else {
  $_SESSION['message'] = 'CARTELERA GUARDADA';
  $_SESSION['message_type'] = 'success'; 

  
  }
  header('location:crudcartelera.php');
  
?>