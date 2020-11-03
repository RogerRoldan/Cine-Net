<?php 
include('conexion_db.php');
if (isset($_GET['id'])){
	$cod=$_GET['id'];
  $codpe=$_GET['id2'];
  $f1=$_GET['id4'];
  $fecha=date("d/m/Y", strtotime($f1));
  $hor=$_GET['id3'];
    $conectar = conectar();
  	 $peliculas = "delete  from cartelera where cod_pelicula='$cod' and cod_sala='$codpe' and horario='$hor' and fecha='$fecha' ";
  	 $result = $conectar->query($peliculas);
		if(!$result) {
      $_SESSION['message'] = 'VERIFIQUE LOS DATOS ';
     $_SESSION['message_type'] = 'danger'; }
     	else {
		  $_SESSION['message'] = 'CARTELERA ELIMINADA';
		  $_SESSION['message_type'] = 'danger'; 
		  }
		
header('location:crudcartelera.php');

}


 ?>