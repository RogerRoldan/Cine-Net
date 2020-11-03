<?php
     include("conexion_db.php");
     $conectar = conectar();

if (isset($_POST['guardar_sala'])){
        $cod_sala  = $_POST['cod_sala'];
        $nomb_sala = $_POST['nomb_sala'];
        $capacidad        = $_POST['capacidad'];
        $tipo_sala = $_POST['tipo_sala'];
   	 $VAR = 0;
   			 if($tipo_sala == '2D'){
  					 $sql = $conectar->query("INSERT INTO salas (cod_sala, nomb_sala, capacidad, tipo_sala, valor) 
                values ('$cod_sala', '$nomb_sala', '$capacidad', '$tipo_sala', '8000')");
                }else{
                if($tipo_sala == '3D'){
   					 $sql = $conectar->query("INSERT INTO salas (cod_sala, nomb_sala, capacidad, tipo_sala, valor) 
               	 values ('$cod_sala', '$nomb_sala', '$capacidad', '$tipo_sala', '12000')");
                
                }else{  
               	 if($tipo_sala == '4D'){
                 		$sql = $conectar->query("INSERT INTO salas (cod_sala, nomb_sala, capacidad, tipo_sala, valor) 
               	   values ('$cod_sala', '$nomb_sala', '$capacidad', '$tipo_sala', '20000')");
               	 }else {$_SESSION['message'] = 'ERROR: El tipo de pelicula no es valido';
    							  $_SESSION['message_type'] = 'danger';
    							  $VAR==1; }
                }
                
                
                }
                }


if(!$sql && $VAR==0) {
      $_SESSION['message'] = 'ERROR: VERIFIQUE LOS DATOS';
     $_SESSION['message_type'] = 'danger'; 
  }else {
  $_SESSION['message'] = 'SALA GUARDADA';
  $_SESSION['message_type'] = 'success'; 
  }

    header('location:crudsala.php');
?>