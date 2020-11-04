<?php
    include("conexion_db.php");
    $conectar = conectar();
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>CineNet Software</title>
    <meta charset="UTF-8">
    <link rel="icon" type="imagen/png" href="img/icono.png" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cartelera.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <?php
        include("header.php");
    ?>
    <div class="container">
    <div class="seleccion">
     <div class="card text-white bg-info mb-3" style="max-width: 35rem;">
	    <div class="texto">
   		 <h2><strong>Fecha:</strong></h2>
    	</div>
    	<div class="boton">
     		<form  method="post">
              <input class="btn btn-info dropdown-toggle" type="date" id="start" name="fech1"
             	 		value="2020-10-11" 
             			 min="2020-1-01" max="2021-12-31">
             	 <label for="start"></label>
     	</div>
              <div class="push">
              		<input class="btn btn-info" type="submit" value="Consultar">
    </form>
          	  </div>
          	  </div>
          	  </div>
          	  </div>
            <?php
            if(isset($_POST['fech1'])){
             	 $fec1=$_POST['fech1'];
             	 $f1 = date("d/m/Y", strtotime($fec1));
              		
              		$sql ="Select c.cod_pelicula,p.nomb_pelicula,s.tipo_sala,c.horario,p.clasificacion from salas s
									join cartelera c on s.cod_sala=c.cod_sala join peliculas p on p.cod_pelicula=c.cod_pelicula
									where c.fecha='$f1'";
									}else {$sql= "select * from fechdia";
									$result = $conectar->query($sql);}
              		$result = $conectar->query($sql);
             ?>
            
             <div class="container">
             <div class="row row-cols-1 row-cols-md-3">
             			<?php foreach($result as $filas){
             				?>
       						<div class="col mb-4">
   										<div  style="width:20rem">
    								 			<img src="img/<?php echo $filas['cod_pelicula']?>.jpg" height="300px" class="card-img-top" alt="">
   											 <div class="card text-white bg-info mb-3 card-body" style="max-width 20rem;">
  				  						 		 		<h2 class="card-title"><strong><center><?php echo $filas['nomb_pelicula']?></center></strong></h2>
   			 					     	 			<h5> <p class="card-text"><strong>FORMATO:</strong><?php echo $filas['tipo_sala']?></p></h5>
     									    			<h5><p class="card-text"><a><strong>HORA:</strong><?php echo $filas['horario']?></a></p></h5>
     									    			<h5><p class="card-text"><a><strong>CLASIFICACION:</strong><?php echo $filas['clasificacion']?></a></p></h5>
   							 				</div>
   										 </div>
   									
   							 </div>
   						 <?php } 					 	
   						 
   						 ?>
   			    </div>
   			    </div>
   			    
   			    	
             
   </div>
 

           
    <?php
        include("footer.php");
    ?>
</body>