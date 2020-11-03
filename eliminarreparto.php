<?php 
include('conexion_db.php');
if (isset($_GET['id'])){
	$cod=$_GET['id'];
    $conectar = conectar();
  	 $peliculas = "delete  from reparto where cod_persona='$cod'";
  	 $result = $conectar->query($peliculas);
		if(!$result) {
      $_SESSION['message'] = 'VERIFIQUE LOS DATOS ';
     $_SESSION['message_type'] = 'danger'; }
     	else {
		  $_SESSION['message'] = 'PELICULA ELIMINADA';
		  $_SESSION['message_type'] = 'danger'; 
		  }
		

    header('location:crudreparto.php');

}


 ?>