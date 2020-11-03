<?php
include('conexion_db.php');
include("boostraplink.php");

	if (isset($_GET['id'])){
		$cod=$_GET['id'];
		 $codpe=$_GET['id2'];
		 $part=$_GET['id3'];
	    $conectar = conectar();
	  	 $tiene = "select * from tiene where cod_persona='$cod' and cod_pelicula='$codpe' and participacion='$part' ";
	  	 $result = $conectar->query($tiene);
	  	 foreach($result as $filas){
	  	 	$codigo= $filas['cod_persona'];
	  	 	$nomb= $filas['cod_pelicula'];
	  	 	$participacion= $filas['participacion'];
	  	 }

}
if (isset($_POST['actualizar_tiene'])){
	$cod= $_GET['id'];
	$codpe=$_GET['id2'];
	$part=$_GET['id3'];
	$codi=$_POST['cod_persona'];
	$nom= $_POST['cod_pelicula'];
	$gen= $_POST['participacion'];


	    $conectar = conectar();
	  	 $tiene = "update tiene set cod_persona='$codi', cod_pelicula='$nom', participacion='$gen' where cod_persona='$cod' and cod_pelicula='$codpe' and participacion='$part' ";
	  	 $result = $conectar->query($tiene);


header('location:crudtiene.php');
if(!$result) {
	$_SESSION['message'] = 'ERROR: VERIFIQUE LOS DATOS';
	$_SESSION['message_type'] = 'danger'; 
	}else {
	$_SESSION['message'] = 'PARTICIPACIÓN ACTUALIZADA';
	$_SESSION['message_type'] = 'success'; }}
?>	

<?php include("header.php")?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-4 mx-auto">
               <div class="card card-body">
                  <form action="editartiene.php?id=<?php echo $_GET['id'] ?>&id2=<?php echo $_GET['id2'] ?>&id3=<?php echo $_GET['id3'] ?>" method="POST">
                     <div class="form-group">
                        <input type="text" name="cod_persona" class="form-control" placeholder="Codigo" autofocus value="<?php echo $codigo; ?>">
                     </div>   
                      <div class="form-group">
                        <input type="text" name="cod_pelicula" class="form-control" placeholder="nombre" autofocus value="<?php echo $nomb; ?>">
                     </div>  
                      <div class="form-group">
                        <input type="text" name="participacion" class="form-control" placeholder="participacion" autofocus value="<?php echo $participacion; ?>">
                     </div>  
                     <input type="submit" name="actualizar_tiene" class="btn btn-success btn-block" value="Actualizar tiene">
                  </form>
               </div>
		</div>
	</div>
</div>
<?php include("footer.php")?>