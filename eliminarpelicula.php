<?php 
include('conexion_db.php');
if (isset($_GET['id'])){
	$cod=$_GET['id'];
    $conectar = conectar();
  	 $peliculas = "delete  from peliculas where cod_pelicula='$cod'";
  	 $result = $conectar->query($peliculas);
		if(!$result) {
      $_SESSION['message'] = 'VERIFIQUE LOS DATOS LA AC';
     $_SESSION['message_type'] = 'danger'; }
     	else {
		  $_SESSION['message'] = 'PELICULA ELIMINADA';
		  $_SESSION['message_type'] = 'danger'; 
		  }
		

header('location:crudpelicula.php');

}


 ?>