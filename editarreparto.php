<?php
include('conexion_db.php');
include("boostraplink.php");

	if (isset($_GET['id'])){
		$cod=$_GET['id'];
	    $conectar = conectar();
	  	 $reparto = "select * from reparto where cod_persona='$cod'";
	  	 $result = $conectar->query($reparto);
	  	 foreach($result as $filas){
	  	 	$codigo= $filas['cod_persona'];
	  	 	$nomb= $filas['nomb_persona'];
	  	 	$profesion= $filas['profesion'];
	  	 }

}
if (isset($_POST['actualizar_reparto'])){
	$cod= $_GET['id'];
	$codi=$_POST['cod_persona'];
	$nom= $_POST['nomb_persona'];
	$gen= $_POST['profesion'];


	    $conectar = conectar();
	  	 $reparto = "update reparto set cod_persona='$codi', nomb_persona='$nom', profesion='$gen' where cod_persona='$cod'";
	  	 $result = $conectar->query($reparto);


header('location:crudreparto.php');
if(!$result) {
	$_SESSION['message'] = 'ERROR: VERIFIQUE LOS DATOS';
	$_SESSION['message_type'] = 'danger'; 
	}else {
	$_SESSION['message'] = 'REPARTO ACTUALIZADO';
	$_SESSION['message_type'] = 'success'; }
}
?>	

<?php include("header.php")?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-4 mx-auto">
               <div class="card card-body">
                  <form action="editarreparto.php?id=<?php echo $_GET['id']; ?>" method="POST">
                     <div class="form-group">
                        <input type="text" name="cod_persona" class="form-control" placeholder="Codigo" autofocus value="<?php echo $codigo; ?>">
                     </div>   
                      <div class="form-group">
                        <input type="text" name="nomb_persona" class="form-control" placeholder="nombre" autofocus value="<?php echo $nomb; ?>">
                     </div>  
                      <div class="form-group">
                        <input type="text" name="profesion" class="form-control" placeholder="profesion" autofocus value="<?php echo $profesion; ?>">
                     </div>  
                     <input type="submit" name="actualizar_reparto" class="btn btn-success btn-block" value="Actualizar Reparto">
                  </form>
               </div>
		</div>
	</div>
</div>
<?php include("footer.php")?>