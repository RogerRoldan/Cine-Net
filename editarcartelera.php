<?php
include('conexion_db.php');
include("boostraplink.php");

	if (isset($_GET['id'])){
		$cod=$_GET['id'];
		 $codpe=$_GET['id2'];
		 $part=$_GET['id3'];
		  $f1=$_GET['id4'];
		  $fecha=date("d/m/Y", strtotime($f1));
	    $conectar = conectar();
	  	 $cartelera = "select * from cartelera where cod_pelicula='$cod' and cod_sala='$codpe' and horario='$part' and fecha='$fecha' ";
	  	 $result = $conectar->query($cartelera);
	  	 foreach($result as $filas){
	  	 	$codigo= $filas['cod_pelicula'];
	  	 	$nomb= $filas['cod_sala'];
	  	 	$horario= $filas['horario'];
	  	 	$fecha=$filas['fecha'];

	  	 }

}
if (isset($_POST['actualizar_cartelera'])){
	$cod= $_GET['id'];
	$codpe=$_GET['id2'];
	$part=$_GET['id3'];
	$f2=$_GET['id4'];
	$fec=date("d/m/Y", strtotime($f2));
	$codi=$_POST['cod_pelicula'];
	$nom= $_POST['cod_sala'];
	$gen= $_POST['horario'];
	$f1=$_POST['fecha'];
	$fech=date("d/m/Y", strtotime($f1));


	    $conectar = conectar();
	  	 $cartelera = "update cartelera set cod_pelicula='$codi', cod_sala='$nom', horario='$gen', fecha='$fech' where cod_pelicula='$cod' and cod_sala='$codpe' and horario='$part' and fecha='$fec' ";
	  	 $result = $conectar->query($cartelera);


header('location:crudcartelera.php');
	if(!$result) {
	$_SESSION['message'] = 'ERROR: VERIFIQUE LOS DATOS';
	$_SESSION['message_type'] = 'danger'; 
	}else {
	$_SESSION['message'] = 'CARTELERA ACTUALIZADA';
	$_SESSION['message_type'] = 'success'; }
}
?>	

<?php include("header.php")?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-4 mx-auto">
               <div class="card card-body">
                  <form action="editarcartelera.php?id=<?php echo $_GET['id'] ?>&id2=<?php echo $_GET['id2'] ?>&id3=<?php echo $_GET['id3'] ?>&id4=<?php echo $_GET['id4'] ?>" method="POST">
                     <div class="form-group">
                        <input type="text" name="cod_pelicula" class="form-control" placeholder="Codigo" autofocus value="<?php echo $codigo; ?>">
                     </div>   
                      <div class="form-group">
                        <input type="text" name="cod_sala" class="form-control" placeholder="nombre" autofocus value="<?php echo $nomb; ?>">
                     </div>  
                       <div class="form-group">
                        <input type="time" name="horario" class="form-control"  step="0" autofocus value="<?php echo $horario; ?>" >
                     </div>   
                      <div class="form-group">
                        <input type="date" name="fecha" class="form-control"  min="2020-10-09" max="2030-12-31" autofocus value="<?php echo $fecha; ?>">
                     </div>   
                     <input type="submit" name="actualizar_cartelera" class="btn btn-success btn-block" value="Actualizar Cartelera">
                  </form>
               </div>
		</div>
	</div>
</div>
<?php include("footer.php")?>