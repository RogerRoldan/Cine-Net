<?php
include('conexion_db.php');
include("boostraplink.php");

	if (isset($_GET['id'])){
		$cod=$_GET['id'];
	    $conectar = conectar();
	  	 $peliculas = "select * from taquilla where cod_taquilla='$cod'";
	  	 $result = $conectar->query($peliculas);
	  	 foreach($result as $filas){
	  	 	$codigo= $filas['cod_taquilla'];
	  	 	$nomb= $filas['tipo_taquilla'];
	  	 }

}
if (isset($_POST['actualizar_taquilla'])){
	$cod= $_GET['id'];
	$codi=$_POST['cod_taquilla'];
	$nom= $_POST['tipo_taquilla'];


	    $conectar = conectar();
	  	 $peliculas = "update taquilla set cod_taquilla='$codi', tipo_taquilla='$nom' where cod_taquilla='$cod'";
	  	 $result = $conectar->query($peliculas);


 header('location:crudtaquilla.php');
 if(!$result) {
	$_SESSION['message'] = 'ERROR: VERIFIQUE LOS DATOS';
	$_SESSION['message_type'] = 'danger'; 
	}else {
	$_SESSION['message'] = 'TAQUILLA ACTUALIZADA';
	$_SESSION['message_type'] = 'success'; }
}
?>	

<?php include("header.php")?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-4 mx-auto">
               <div class="card card-body">
                  <form action="editartaquilla.php?id=<?php echo $_GET['id']; ?>" method="POST">
                     <div class="form-group">
                        <input type="text" name="cod_taquilla" class="form-control" placeholder="Codigo" autofocus value="<?php echo $codigo; ?>">
                     </div>   
                      <div class="form-group">
                        <input type="text" name="tipo_taquilla" class="form-control" placeholder="tipo de taquilla" autofocus value="<?php echo $nomb; ?>">
                     </div>  
                     <input type="submit" name="actualizar_taquilla" class="btn btn-success btn-block" value="Actualizar Taquilla">
                  </form>
               </div>
		</div>
	</div>
</div>
<?php include("footer.php")?>