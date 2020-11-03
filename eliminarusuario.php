<?php 
include('conexion_db.php');
if (isset($_GET['id'])){
	$cod=$_GET['id'];
    $conectar = conectar();
  	 $peliculas = "delete  from usuarios where cod_usuario='$cod'";
  	 $result = $conectar->query($peliculas);
		if(!$result) {
      $_SESSION['message'] = 'VERIFIQUE LOS DATOS';
     $_SESSION['message_type'] = 'danger'; }
     	else {
		  $_SESSION['message'] = 'USUARIO ELIMINADO';
		  $_SESSION['message_type'] = 'danger'; 
		  }
		

  	 header('location:crudusuario.php');

}


 ?>