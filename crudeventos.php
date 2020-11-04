<?php
 	 include("conexion_db.php");
   include("boostraplink.php");
 	 include("header.php");
    $conectar = conectar();
  	 $peliculas = "select * from eventos";
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
   <a href="crudsala.php" type="button" class="btn btn-secondary">Salas</a> 
   <a href="crudusuario.php" type="button" class="btn btn-secondary">Usuarios</a> 
   <a href="crudreparto.php" type="button" class="btn btn-secondary">Reparto</a> 
   <a href="crudtiene.php" type="button" class="btn btn-secondary">Tiene</a> 
   <a href="crudcartelera.php" type="button" class="btn btn-secondary">Cartelera</a> 
   <a href="crudtaquilla.php" type="button" class="btn btn-secondary">Taquilla</a> 
   <a href="crudempleados.php" type="button" class="btn btn-secondary">Empleados</a> 
   <a href="crudtiquete.php" type="button" class="btn btn-secondary">Tiquete</a> 
   <a href="crudeventos.php" type="button" class="btn btn-info">Eventos</a> 
  </div>
  </div>


      <div class="container p-4">
         <div class="row"> 

              <div class="col-md-12">
                  <h1 class="text-center" mt-4 >Lista de Eventos</h1>
               </div>
               <div class="col-md-12 ">
                  <table class="table table-striped table-hover">
                     <thead class="thead-dark">
                        <tr>
                           <th scope="col">Fecha y Hora</th>
                           <th scope="col">Tabla</th>
                           <th scope="col">Usuario</th>
                           <th scope="col">Comando</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach($result as $filas){?> 
                              <tr>
                              <td><?php echo $filas['fechahora'] ?></td>
                              <td><?php echo $filas['nomb_tabla'] ?></td>
                              <td><?php echo $filas['usuario'] ?></td>
                              <td><?php echo $filas['comando'] ?></td>
                           </tr>
                        <?php } ?>
                     </tbody>
                  </table>
              </div>
           

   </body>
   <?php
        include("footer.php");
    ?>
</html>

