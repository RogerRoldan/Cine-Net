<?php
include('conexion_db.php');
include("boostraplink.php");

	if (isset($_GET['id'])){
		$cod=$_GET['id'];
	    $conectar = conectar();
	  	 $peliculas = "select * from salas where cod_sala='$cod'";
	  	 $result = $conectar->query($peliculas);
	  	 foreach($result as $filas){
	  	 	$codigo= $filas['cod_sala'];
	  	 	$nomb= $filas['nomb_sala'];
	  	 	$capacidad= $filas['capacidad'];
	  	 	$clasifica= $filas['tipo_sala'];
	  	 }

}
if (isset($_POST['actualizar_sala'])){
	$cod= $_GET['id'];
	$codi=$_POST['cod_sala'];
	$nom= $_POST['nomb_sala'];
	$gen= $_POST['capacidad'];
	$clas= $_POST['tipo_sala'];
	$VAR=0;
	    $conectar = conectar();
	   	 if($clas== '2D'){
  					 $peliculas = "update salas set cod_sala='$codi', nomb_sala='$nom', capacidad='$gen', tipo_sala='$clas', valor=8000 where cod_sala='$cod'";
	  				 $result = $conectar->query($peliculas);
	  				 $_SESSION['message'] = 'SALA	ACTUALIZADA';
 					 $_SESSION['message_type'] = 'info'; 
                }else{
                if($clas == '3D'){
   					 $peliculas = "update salas set cod_sala='$codi', nomb_sala='$nom', capacidad='$gen', tipo_sala='$clas', valor=12000 where cod_sala='$cod'";
	  					 $result = $conectar->query($peliculas);
	  					 $_SESSION['message'] = 'SALA	ACTUALIZADA';
 						 $_SESSION['message_type'] = 'info'; 
                }else{  
               	 if($clas == '4D'){
                 		$peliculas = "update salas set cod_sala='$codi', nomb_sala='$nom', capacidad='$gen', tipo_sala='$clas', valor=20000 where cod_sala='$cod'";
	  	 					$result = $conectar->query($peliculas);
	  	 					$_SESSION['message'] = 'SALA	ACTUALIZADA';
 							$_SESSION['message_type'] = 'info'; 
               	 }else {$_SESSION['message'] = 'ERROR: El tipo de sala no es valido';
								  $_SESSION['message_type'] = 'danger';
								  $VAR=1;
    							  }
    							  }
    							  }

header('location:crudsala.php');
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
                  <form action="editarsala.php?id=<?php echo $_GET['id']; ?>" method="POST">
                     <div class="form-group">
                        <input type="text" name="cod_sala" class="form-control" placeholder="Codigo" autofocus value="<?php echo $codigo; ?>">
                     </div>   
                      <div class="form-group">
                        <input type="text" name="nomb_sala" class="form-control" placeholder="nombre" autofocus value="<?php echo $nomb; ?>">
                     </div>  
                      <div class="form-group">
                        <input type="text" name="capacidad" class="form-control" placeholder="capacidad" autofocus value="<?php echo $capacidad; ?>">
                     </div>  
                      <div class="form-group">
                        <input type="text" name="tipo_sala" class="form-control" placeholder="tipo_sala" autofocus value="<?php echo $clasifica; ?>">
                     </div>  
                     <input type="submit" name="actualizar_sala" class="btn btn-success btn-block" value="Actualizar Sala">
                  </form>
               </div>
		</div>
	</div>
</div>
<?php include("footer.php")?>