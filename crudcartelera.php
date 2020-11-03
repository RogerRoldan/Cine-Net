<?php
 	 include("conexion_db.php");
   include("boostraplink.php");
 	 include("header.php");
    $conectar = conectar();
  	 $cartelera = "select * from cartelera";
  	 $result = $conectar->query($cartelera);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>CineNet Software</title>
    <meta charset="UTF-8">
    <link rel="icon" type="imagen/png" href="img/icono.png" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


   </head>
   <body>
      <div class="container-fluid p-4">
         <div class="row">
            <div class="col-md-4">
                <?php if (isset($_SESSION['message'])) { ?>
      				<div class="alert alert-<?= $_SESSION['message_type']?>" role="alert">
      				  	<?= $_SESSION['message']?>
      				  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        				  	<span aria-hidden="true">&times;</span>
      				 	 </button>
     					 </div>
    				  <?php session_unset(); } ?>


               <div class="card card-body">
                  <form action="ingresarcartelera.php" method="POST">
                  <div class="col-md-12">
                     <h1 class="text-center" mt-4 >Agregar nueva cartelera</h1>
                  </div>
                     <div class="form-group">
                        <input type="text" name="cod_pelicula" class="form-control" placeholder="Codigo Pelicula" autofocus>
                     </div>   
                      <div class="form-group">
                        <input type="text" name="cod_sala" class="form-control" placeholder="Codigo Sala" autofocus>
                     </div>  
                      <div class="form-group">
                        <input type="time" name="horario" class="form-control"  step="0" autofocus >
                     </div>   
                      <div class="form-group">
                        <input type="date" name="fecha" class="form-control"  min="2020-10-09" max="2030-12-31" autofocus>
                     </div>   
                     <input type="submit" name="guardar_cartelera" class="btn btn-success btn-block" value="Guardar">
                  </form>
               </div>
            </div>  

            <div class="col-md-8">

             
               <div class="col-md-12">
                  <h1 class="text-center" mt-4 >Cartelera</h1>
               </div>
               <div class="col-md-12 ">
                  <table class="table table-striped table-hover">
                     <thead class="thead-dark">
                        <tr>
                           <th scope="col">Codigo Persona</th>
                           <th scope="col">Codigo Pelicula</th>
                           <th scope="col">Horario</th>
                           <th scope="col">Fecha</th>
                           <th scope="col"></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach($result as $filas){?> 
                              <tr>
                              <td><?php echo $filas['cod_pelicula'] ?></td>
                              <td><?php echo $filas['cod_sala'] ?></td>
                              <td><?php echo $filas['horario'] ?></td>
                              <td><?php echo $filas['fecha'] ?></td>
                              <td>

                              <a href="editarcartelera.php?id=<?php echo $filas['cod_pelicula'] ?>&id2=<?php echo $filas['cod_sala'] ?>&id3=<?php echo $filas['horario'] ?>&id4=<?php echo $filas['fecha'] ?>" class="btn btn-primary">Editar</a>
                              <a href="eliminarcartelera.php?id=<?php echo $filas['cod_pelicula'] ?>&id2=<?php echo $filas['cod_sala'] ?>&id3=<?php echo $filas['horario'] ?>&id4=<?php echo $filas['fecha'] ?>" class="btn btn-danger">Eliminar</a>
                              </td>
                           </tr>
                        <?php } ?>
                     </tbody>
                  </table>
               </div>
            </div>

   </body>
   <?php
        include("footer.php");
    ?>
</html>

