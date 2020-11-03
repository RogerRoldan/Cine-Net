<?php
     include("conexion_db.php");
     $conectar = conectar();

if (isset($_POST['guardar_taquilla'])){
        $cod_taquilla  = $_POST['cod_taquilla'];
        $tipo_taquilla = $_POST['tipo_taquilla'];

    
    $sql = $conectar->query("INSERT INTO taquilla (cod_taquilla, tipo_taquilla) 
                values ('$cod_taquilla', '$tipo_taquilla')");}


if(!$sql) {
      $_SESSION['message'] = 'ERROR: VERIFIQUE LOS DATOS';
     $_SESSION['message_type'] = 'danger'; 
  }else {
  $_SESSION['message'] = 'TAQUILLA GUARDADA';
  $_SESSION['message_type'] = 'success'; 
  }

    header('location:crudtaquilla.php');
?>