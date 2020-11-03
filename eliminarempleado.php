<?php 
include('conexion_db.php');
if (isset($_GET['id'])){
	$cod=$_GET['id'];
    $conectar = conectar();
  	 $peliculas = "delete  from empleados where cod_empleado='$cod'";
  	 $result = $conectar->query($peliculas);
		if(!$result) {
      $_SESSION['message'] = 'VERIFIQUE LOS DATOS LA AC';
     $_SESSION['message_type'] = 'danger'; }
     	else {
		  $_SESSION['message'] = 'EMPLEADO ELIMINADA';
		  $_SESSION['message_type'] = 'danger'; 
		  }
		

  	 header('location:crudempleados.php');

}

 ?>