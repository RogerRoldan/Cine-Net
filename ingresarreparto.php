<?php
     include("conexion_db.php");
     $conectar = conectar();

if (isset($_POST['guardar_reparto'])){
        $cod_persona  = $_POST['cod_persona'];
        $nomb_persona = $_POST['nomb_persona'];
        $profesion    = $_POST['profesion'];
        
    
    $sql = $conectar->query("INSERT INTO reparto   values ('$cod_persona', '$nomb_persona', '$profesion')");}


if(!$sql) {
      $_SESSION['message'] = 'ERROR: VERIFIQUE LOS DATOS';
     $_SESSION['message_type'] = 'danger'; 
  }else {
  $_SESSION['message'] = 'REPARTO GUARDADA';
  $_SESSION['message_type'] = 'success'; 
  }

    header('location:crudreparto.php');
?>