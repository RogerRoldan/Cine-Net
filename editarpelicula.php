<?php
include('conexion_db.php');
include("boostraplink.php");

	if (isset($_GET['id'])){
		$cod=$_GET['id'];
	    $conectar = conectar();
	  	 $peliculas = "select * from peliculas where cod_pelicula='$cod'";
	  	 $result = $conectar->query($peliculas);
	  	 foreach($result as $filas){
	  	 	$codigo= $filas['cod_pelicula'];
	  	 	$nomb= $filas['nomb_pelicula'];
	  	 	$genero= $filas['genero'];
	  	 	$clasifica= $filas['clasificacion'];
	  	 }

}
if (isset($_POST['actualizar_pelicula'])){
	$cod= $_GET['id'];
	$codi=$_POST['cod_pelicula'];
	$nom= $_POST['nomb_pelicula'];
	$gen= $_POST['genero'];
	$clas= $_POST['clasificacion'];

	    $conectar = conectar();
	  	 $peliculas = "update peliculas set cod_pelicula='$codi', nomb_pelicula='$nom', genero='$gen', clasificacion='$clas' where cod_pelicula='$cod'";
	  	 $result = $conectar->query($peliculas);


header('location:crudpelicula.php');
if(!$result) {
	$_SESSION['message'] = 'ERROR: VERIFIQUE LOS DATOS';
	$_SESSION['message_type'] = 'danger'; 
	}else {
	$_SESSION['message'] = 'PELICULA ACTUALIZADA';
	$_SESSION['message_type'] = 'success'; } 
}
?>	

<?php include("header.php")?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-4 mx-auto">
               <div class="card card-body">
                  <form action="editarpelicula.php?id=<?php echo $_GET['id']; ?>" method="POST">
                     <div class="form-group">
                        <input type="text" name="cod_pelicula" class="form-control" placeholder="Codigo" autofocus value="<?php echo $codigo; ?>">
                     </div>   
                      <div class="form-group">
                        <input type="text" name="nomb_pelicula" class="form-control" placeholder="nombre" autofocus value="<?php echo $nomb; ?>">
                     </div>  
                      <div class="form-group">
                        <input type="text" name="genero" class="form-control" placeholder="genero" autofocus value="<?php echo $genero; ?>">
                     </div>  
                      <div class="form-group">
                        <input type="text" name="clasificacion" class="form-control" placeholder="clasificacion" autofocus value="<?php echo $clasifica; ?>">
                     </div>  
                     <input type="submit" name="actualizar_pelicula" class="btn btn-success btn-block" value="Actualizar Pelicula">
                  </form>
               </div>
		</div>
	</div>
</div>
<?php include("footer.php")?>