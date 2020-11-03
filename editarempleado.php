<?php
include('conexion_db.php');
include("boostraplink.php");

	if (isset($_GET['id'])){
		$cod=$_GET['id'];
	    $conectar = conectar();
	  	 $peliculas = "select * from empleados where cod_empleado='$cod'";
	  	 $result = $conectar->query($peliculas);
	  	 foreach($result as $filas){
	  	 	$codigo= $filas['cod_empleado'];
	  	 	$nomb= $filas['cod_taquilla'];
	  	 	$nomb_empleado= $filas['nomb_empleado'];
	  	 	$clasifica= $filas['horario'];
	  	 }

}
if (isset($_POST['actualizar_empleado'])){
	$cod= $_GET['id'];
	$codi=$_POST['cod_empleado'];
	$nom= $_POST['cod_taquilla'];
	$gen= $_POST['nomb_empleado'];
	$clas= $_POST['horario'];

	    $conectar = conectar();
	  	 $peliculas = "update empleados set cod_empleado='$codi', cod_taquilla='$nom', nomb_empleado='$gen', horario='$clas' where cod_empleado='$cod'";
	  	 $result = $conectar->query($peliculas);


 header('location:crudempleados.php');
 if($result) {
 $_SESSION['message'] = 'EMPLEADO ACTUALIZADO';
 $_SESSION['message_type'] = 'info'; 
 }else {
 	 $_SESSION['message'] = 'ERROR:verifique los datos';
     $_SESSION['message_type'] = 'danger'; }
}
?>	

<?php include("header.php")?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-4 mx-auto">
               <div class="card card-body">
                  <form action="editarempleado.php?id=<?php echo $_GET['id']; ?>" method="POST">
                     <div class="form-group">
                        <input type="text" name="cod_empleado" class="form-control" placeholder="Codigo" autofocus value="<?php echo $codigo; ?>">
                     </div>   
                      <div class="form-group">
                        <input type="text" name="cod_taquilla" class="form-control" placeholder="puesto de trabajo" autofocus value="<?php echo $nomb; ?>">
                     </div>  
                      <div class="form-group">
                        <input type="text" name="nomb_empleado" class="form-control" placeholder="nombre del empleado" autofocus value="<?php echo $nomb_empleado; ?>">
                     </div>  
                      <div class="form-group">
                        <input type="text" name="horario" class="form-control" placeholder="horario" autofocus value="<?php echo $clasifica; ?>">
                     </div>  
                     <input type="submit" name="actualizar_empleado" class="btn btn-success btn-block" value="Actualizar Empleado">
                  </form>
               </div>
		</div>
	</div>
</div>
<?php include("footer.php")?>