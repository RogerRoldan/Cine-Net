<?php
     include("conexion_db.php");
     $conectar = conectar();

if (isset($_POST['guardar_empleado'])){
        $cod_empleado  = $_POST['cod_empleado'];
        $cod_taquilla = $_POST['cod_taquilla'];
        $nomb_empleado        = $_POST['nomb_empleado'];
        $horario = $_POST['horario'];
    
    $sql = $conectar->query("INSERT INTO empleados (cod_empleado, cod_taquilla, nomb_empleado, horario) 
                values ('$cod_empleado', '$cod_taquilla', '$nomb_empleado', '$horario')");}


if(!$sql) {
      $_SESSION['message'] = 'ERROR: VERIFIQUE LOS DATOS';
     $_SESSION['message_type'] = 'danger'; 
  }else {
  $_SESSION['message'] = 'PELICULA GUARDADA';
  $_SESSION['message_type'] = 'success'; 
  }

    header('location:crudempleados.php');
?>