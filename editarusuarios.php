<?php
include('conexion_db.php');
include("boostraplink.php");

	if (isset($_GET['id'])){
		$cod=$_GET['id'];
	    $conectar = conectar();
	  	 $peliculas = "select * from usuarios where cod_usuario='$cod'";
	  	 $result = $conectar->query($peliculas);
	  	 foreach($result as $filas){
	  	 	$codigo= $filas['cod_usuario'];
	  	 	$nomb= $filas['nomb_usuario'];
	  	 	$tipo_usuario= $filas['tipo_usuario'];
	  	 	
	  	 }

}
if (isset($_POST['actualizar_usuario'])){
	$cod= $_GET['id'];
	$codi=$_POST['cod_usuario'];
	$nom= $_POST['nomb_usuario'];
	$gen= $_POST['tipo_usuario'];
	$VAR=0;

	    $conectar = conectar();
	   	 if($gen== 'Normal' || $gen == 'NORMAL' || $gen == 'normal'){
  					 $peliculas = "update usuarios set cod_usuario='$codi', nomb_usuario='$nom', tipo_usuario='Normal', descuento='20'  where cod_usuario='$cod'";
	  				 $result = $conectar->query($peliculas);
	  				 $_SESSION['message'] = 'USUARIO ACTUALIZADO';
 					 $_SESSION['message_type'] = 'info'; 
                }else{  
               	 if($gen == 'VIP' || $gen == 'vip' || $gen== 'Vip'){
                 		$peliculas = "update usuarios set cod_usuario='$codi', nomb_usuario='$nom', tipo_usuario='VIP', descuento='40' where cod_usuario='$cod'";
	  	 					$result = $conectar->query($peliculas);
	  	 					$_SESSION['message'] = 'USUARIO	ACTUALIZADO';
 							$_SESSION['message_type'] = 'info'; 
               	 }else {$_SESSION['message'] = 'ERROR: VERIFIQUE LOS DATOS';
								  $_SESSION['message_type'] = 'danger';
								  $VAR=1;
    							 }
    							  }
    							  

 header('location:crudusuario.php');
 if(!$result and $VAR==1) {
				 $_SESSION['message'] = 'ERROR:VERIFIQUE LOS DATOS';
    			 $_SESSION['message_type'] = 'danger';
 }

}
?>	

<?php include("header.php")?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-4 mx-auto">
               <div class="card card-body">
                  <form action="editarusuarios.php?id=<?php echo $_GET['id']; ?>" method="POST">
                     <div class="form-group">
                        <input type="text" name="cod_usuario" class="form-control" placeholder="Codigo" autofocus value="<?php echo $codigo; ?>">
                     </div>   
                      <div class="form-group">
                        <input type="text" name="nomb_usuario" class="form-control" placeholder="nombre" autofocus value="<?php echo $nomb; ?>">
                     </div>  
                      <div class="form-group">
                        <input type="text" name="tipo_usuario" class="form-control" placeholder="tipo de usuario" autofocus value="<?php echo $tipo_usuario; ?>">
                     </div>  
                     <input type="submit" name="actualizar_usuario" class="btn btn-success btn-block" value="Actualizar Usuario">
                  </form>
               </div>
		</div>
	</div>
</div>
<?php include("footer.php")?>