<?php 
include('conexion_db.php');
if (isset($_GET['id'])){
	$cod=$_GET['id'];
    $conectar = conectar();
  	 $peliculas = "delete  from taquilla where cod_taquilla='$cod'";
  	 $result = $conectar->query($peliculas);
  	 
		if(!$result) {
      $_SESSION['message'] = 'VERIFIQUE LOS DATOS';
     $_SESSION['message_type'] = 'danger'; }
     	else {
		  $_SESSION['message'] = 'TAQUILLA ELIMINADA';
		  $_SESSION['message_type'] = 'danger'; 
		  }
		

  	 header('location:crudtaquilla.php');

}


 ?>