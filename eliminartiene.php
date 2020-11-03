<?php 
include('conexion_db.php');
if (isset($_GET['id'])){
	$cod=$_GET['id'];
  $codpe=$_GET['id2'];
  $part=$_GET['id3'];
    $conectar = conectar();
  	 $peliculas = "delete  from tiene where cod_persona='$cod' and cod_pelicula='$codpe' and participacion='$part' ";
  	 $result = $conectar->query($peliculas);
		if(!$result) {
      $_SESSION['message'] = 'VERIFIQUE LOS DATOS ';
     $_SESSION['message_type'] = 'danger'; }
     	else {
		  $_SESSION['message'] = 'PARTICIPACION ELIMINADA';
		  $_SESSION['message_type'] = 'danger'; 
		  }
		
header('location:crudtiene.php');

}


 ?>