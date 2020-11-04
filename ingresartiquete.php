<?php
     include("conexion_db.php");
     $conectar = conectar();

if (isset($_POST['guardar_pelicula'])){
        $cod_tiquete    = $_POST['cod_tiquete'];
        $nomb_pelicula  = $_POST['cod_usuario'];
        $genero         = $_POST['cod_taquilla'];
        $clasificacion  = $_POST['cod_pelicula'];
        $sala           = $_POST['cod_sala'];
        $hora				= $_POST['hora_funcion'];
     	  $fecha				= $_POST['fecha_funcion'];
        $num				= $_POST['num_silla'];
        $tipo				= $_POST['tipo_pago'];
        $total				= $_POST['pago_total'];	
			    		
    $sql = $conectar->query("INSERT INTO tiquete (cod_tiquete, cod_usuario, cod_taquilla, cod_pelicula, cod_sala, hora_funcion, fecha_funcion, num_silla, tipo_pago, pago_total) 
                values ('$cod_tiquete', '$nomb_pelicula', '$genero', '$clasificacion', '$sala', '$hora', '$fecha', '$num', '$tipo', '$total')");}


if(!$sql) {
      $_SESSION['message'] = 'ERROR: VERIFIQUE LOS DATOS';
     $_SESSION['message_type'] = 'danger'; 
  }else {
  $_SESSION['message'] = 'TIQUETE GUARDADO';
  $_SESSION['message_type'] = 'success'; 
  }

    header('location:crudtiquete.php');
?>