<?php
     include("conexion_db.php");
     $conectar = conectar();

if (isset($_POST['guardar_usuario'])){
        $cod_usuario  = $_POST['cod_usuario'];
        $nomb_usuario = $_POST['nomb_usuario'];
        $tipo_usuario        = $_POST['tipo_usuario'];
   	  $VAR = 0;
   			 if($tipo_usuario == 'Normal' || $tipo_usuario == 'NORMAL' || $tipo_usuario == 'normal'){
  					 $sql = $conectar->query("INSERT INTO usuarios (cod_usuario, nomb_usuario, tipo_usuario, descuento) 
                values ('$cod_usuario', '$nomb_usuario', 'Normal', '20')");
                }else{
                if($tipo_usuario == 'VIP' || $tipo_usuario == 'vip' || $tipo_usuario == 'Vip'){
   					 $sql = $conectar->query("INSERT INTO usuarios (cod_usuario, nomb_usuario, tipo_usuario, descuento) 
               	 values ('$cod_usuario', '$nomb_usuario', 'VIP', '40')");            
                }else {   $_SESSION['message'] = 'ERROR: El tipo de usuario no es valido';
    							  $_SESSION['message_type'] = 'danger';
    							  $VAR==1;}
                }
                }


if(!$sql && $VAR==0) {
      $_SESSION['message'] = 'ERROR: VERIFIQUE LOS DATOS';
     $_SESSION['message_type'] = 'danger'; 
  }else {
  $_SESSION['message'] = 'USUARIO GUARDADA';
  $_SESSION['message_type'] = 'success'; 
  }

    header('location:crudusuario.php');
?>