<?php
 	 include("conexion_db.php");
   include("boostraplink.php");
 	 include("header.php");
    $conectar = conectar();
  	 $peliculas = "select * from salas";
  	 $result = $conectar->query($peliculas);
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
   <div class="container text-center py-1">
  <div class="btn-group" role="group"  aria-label="First group">
   <a href="crudpelicula.php" type="button" class="btn btn-secondary">Peliculas</a> 
   <a href="crudsala.php" type="button" class="btn btn-info">Salas</a> 
   <a href="crudusuario.php" type="button" class="btn btn-secondary">Usuarios</a> 
   <a href="crudreparto.php" type="button" class="btn btn-secondary">Reparto</a> 
   <a href="crudtiene.php" type="button" class="btn btn-secondary">Tiene</a> 
   <a href="crudcartelera.php" type="button" class="btn btn-secondary">Cartelera</a> 
   <a href="crudtaquilla.php" type="button" class="btn btn-secondary">Taquilla</a> 
   <a href="crudempleados.php" type="button" class="btn btn-secondary">Empleados</a> 
   <a href="crudtiquete.php" type="button" class="btn btn-secondary">Tiquete</a> 
   <a href="crudeventos.php" type="button" class="btn btn-secondary">Eventos</a> 
  </div>
  </div>

      <div class="container-fluid p-4">
         <div
          class="row">
            <div class="col-md-4">
                <?php if (isset($_SESSION['message'])) { ?>
      				<div class="alert alert-<?= $_SESSION['message_type']?>" role="alert">
      				  	<?= $_SESSION['message']?>
      				  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        				  	<span aria-hidden="true">&times;</span>
      				 	 </button>
     					 </div>
    				  <?php session_unset(); } ?>



               <div class="card card-body ">
                  <form action="ingresarsala.php" method="POST">
                     <div class="col-md-12">
                        <h1 class="text-center" mt-4 >Agregar sala</h1>
                     </div>
                     <div class="form-group">
                        <input type="text" name="cod_sala" class="form-control" placeholder="Codigo" autofocus>
                     </div>   
                      <div class="form-group">
                        <input type="text" name="nomb_sala" class="form-control" placeholder="nombre" autofocus>
                     </div>  
                      <div class="form-group">
                        <input type="text" name="capacidad" class="form-control" placeholder="capacidad" autofocus>
                     </div>  
                      <div class="form-group">
                        <input type="text" name="tipo_sala" class="form-control" placeholder="tipo de sala" autofocus>
                     </div>  
                     <input type="submit" name="guardar_sala" class="btn btn-success btn-block" value="Guardar">
                  </form>
               </div>
            </div>  

            <div class="col-md-8" style="margin-top: 30px">
               <div class="col-md-12">
                  <h1 class="text-center" mt-4 >Lista de Salas</h1>
               </div>
               <div class="col-md-12 ">
                  <table class="table table-striped table-hover">
                     <thead class="thead-dark">
                        <tr>
                           <th scope="col">Codigo</th>
                           <th scope="col">Nombre</th>
                           <th scope="col">CAPACIDAD</th>
                           <th scope="col">TIPO DE SALA</th>
                           <th scope="col">PRECIO DE LA BOLETA</th>
                           <th scope="col"></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach($result as $filas){?> 
                              <tr>
                              <td><?php echo $filas['cod_sala'] ?></td>
                              <td><?php echo $filas['nomb_sala'] ?></td>
                              <td><?php echo $filas['capacidad'] ?></td>
                              <td><?php echo $filas['tipo_sala'] ?></td>
                              <td><?php echo $filas['valor'] ?></td>
                              <td>

                              <a href="editarsala.php?id=<?php echo $filas['cod_sala'] ?>" class="btn btn-primary">Editar</a>
                              <a href="eliminarsala.php?id=<?php echo $filas['cod_sala'] ?>" class="btn btn-danger">Eliminar</a>
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