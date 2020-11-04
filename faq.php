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
    <link rel="stylesheet" href="css/faq.css">
    
    <link href="css/carousel.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
</head>

<body>
<?php
        include("header.php");
    ?>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">

  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4"> 
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Desarrollador</h2>
        <p>Comunicación se soporte técnico e información de software a: </p><h4>desarrolador.conenet@software.com</h4>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Desarrollador</h2>
        <p>Comunicación se soporte técnico e información de software a: </p><h4>desarrolador.conenet@software.com</h4>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Desarrollador</h2>
        <p>Comunicación se soporte técnico e información de software a: </p><h4>desarrolador.conenet@software.com</h4>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Facturación de un tiquete. <span class="text-muted">Sistema de bloque.</span></h2>
        <p class="lead">El registro se realiza mediante el llenado de código de usuario en caso de ser usuario, de lo contrario colocar en el código el valor 0 que es el usuario predefinido por el sistema (Seleciona la fecha para comprar el tiquete, ingresa el nombre de la pelicula y el tipo de pago que realiza el usuario, luego la silla que va a utilizar y busca las peliculas disponibles para esa fecha) .</p>
      </div>
      <div class="col-md-5">


        <img src="img/imagen3.png" alt="">
        
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Sistema de eventos. <span class="text-muted">Registra los cambios en la  base de datos.</span></h2>
        <p class="lead">En esta tabla se registran todos los movimientos que se generan en la base de datos es decir los comandos INSERT,  UPDATE, DELETE, asi como tambien tabla sobre la que se aplicaron los cambios y el usuario que los realizo.</p>
      </div>
      <div class="col-md-5 order-md-1">

        <img src="img/imagen2.png" alt="">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Agregar información a las tablas. <span class="text-muted">Registro de datos de todas la tablas.</span></h2>
        <p class="lead">En el crud se tiene acceso a las tablas de la base de datos para la inserción, edición y eliminación de los datos para una correcta administración, para cada mensaje recibido sobre la no inserción o edición de datos verifique que los campos estén completos o corectamente.</p>
      </div>
      <div class="col-md-5">

        <img src="img/imagen1.png" alt="">
        
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

    <?php
        include("footer.php");
    ?>
</body>