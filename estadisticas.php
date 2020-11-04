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
    <link rel="stylesheet" href="css/estadisticas.css?23234">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <?php
        include("header.php");
    ?>
  <div class="fondo">
    <div class="containerge1">

  		<div class="containerventas">
  			<h3><center>TOTAL DE VENTAS</center></h3>
              <p></p>
            <form  method="post">
              <input type="date" id="start" name="trip-start1"
              value="2020-10-09" 
              min="2020-10-09" max="2030-12-31">
              <label for="start">Hasta</label>
              <input type="date" id="start1" name="trip-start2"
               value="2020-10-09" 
              min="2020-10-09" max="2030-12-31">
              <center><input type="submit" class="btn btn-info" value="Consultar"></center>
            </form>
            <?php
              if (isset($_POST['trip-start1'])) {
                $fec1=$_POST['trip-start1'];
                $fec2=$_POST['trip-start2'];
                $f1 = date("d/m/Y", strtotime($fec1));
                $f2 = date("d/m/Y", strtotime($fec2));
                $consulta=$conectar->query("select sum(pago_total) as total from tiquete
                  where fecha_funcion>='$f1' and fecha_funcion<='$f2'");
                  foreach ($consulta as $it ) {
                  $tot=$it['total'];
                  if ($tot!=null) {
                     echo "<center><label class=totalcon >$ $tot</label></center>";
                  }
                  else {
                    $tot=0;
                    echo "<center><label class=totalcon >$ $tot</label></center>";
                  }
                }
                }
              else {
                 $tot=0;
                  echo "<center><label class=totalcon >$ $tot</label></center>";
                  }


             ?>
  		</div> 

      <div class=containertiquetesv>    
        <h3><center>TIQUETES VENDIDOS</center></h3>
              <p></p>
            <form  method="post">
              <input type="date" id="start" name="trip-start3"
              value="2020-10-09" 
              min="2020-10-09" max="2030-12-31">
              <label for="start">Hasta</label>
              <input type="date" id="start1" name="trip-start4"
               value="2020-10-09" 
              min="2020-10-09" max="2030-12-31">
              <center><input type="submit" class="btn btn-info" value="Consultar Tiquetes"></center>
            </form>
            <?php
              if (isset($_POST['trip-start3'])) {
              $fec1=$_POST['trip-start3'];
              $fec2=$_POST['trip-start4'];
              $f1 = date("d/m/Y", strtotime($fec1));
              $f2 = date("d/m/Y", strtotime($fec2));
              $consulta=$conectar->query("select count(*) as conteo from tiquete
                where fecha_funcion>='$f1' and fecha_funcion<='$f2'");
                foreach ($consulta as $it ) {
                $tot=$it['conteo'];
                if ($tot!=null) {
                   echo "<center><label class=totalcon >$tot</label></center>";
                }
                else {
                  $tot=0;
                  echo "<center><label class=totalcon > $tot</label></center>";
                }
              }
              }
              else {
                  $tot=0;
                  echo "<center><label class=totalcon > $tot</label></center>";
              }

             ?>
      </div>
      <div class=containerpeliv>    
        <h3><center>PELÍCULAS MÁS VISTAS</center></h3>
              <p></p>
            <form  method="post">
              <input type="date" id="start" name="trip-start5"
              value="2020-10-09" 
              min="2020-10-09" max="2030-12-31">
              <label for="start">Hasta</label>
              <input type="date" id="start1" name="trip-start6"
               value="2020-10-09" 
              min="2020-10-09" max="2030-12-31">
              <center><input type="submit" class="btn btn-info" value="Consultar Pelicula"></center>
            </form>
            <?php
              if (isset($_POST['trip-start5'])) {
                $fec1=$_POST['trip-start5'];
                $fec2=$_POST['trip-start6'];
                $f1 = date("d/m/Y", strtotime($fec1));
                $f2 = date("d/m/Y", strtotime($fec2));
                $consulta=$conectar->query("SELECT p.nomb_pelicula as nom, COUNT(*) as vistas FROM peliculas p
                                            join tiquete t on p.cod_pelicula=t.cod_pelicula
                                            where t.fecha_funcion>='$f1' and t.fecha_funcion<='$f2'
                                            group by (p.cod_pelicula)
                                            order by (vistas) desc
                                            limit 5");
                  echo "<table class=table>";
                  echo "<thead class=thead-dark>";
                  echo "<tr>";
                  echo "<th ><center>  NOMBRE  </center></th>";
                  echo "<th><center> C. VISTAS </th></center>";
                  echo "</tr>";
                  echo "</thead>";

                  foreach ($consulta as $it ) {
                  $tot=$it['vistas'];
                  $nomp=$it['nom'];

                  if ($tot!=null) {
                    
                     echo "<tr>";
                     echo "<td>";
                     echo "<center><label class=tabv >$nomp</label></center>";
                     echo "</td>";
                     echo "<td>";
                     echo "<center><label class=tabv >$tot</label></center>";
                     echo "</td>";
                     echo "</tr>";
                     echo "</table";
                  }
                }
                }
             ?>

      </div>

	  </div>

    <div class="containerge2">
        <div class=containerpagos>    
         <h3><center>TIPOS DE PAGO</center></h3>
              <p></p>
            <form  method="post">
              <input type="date" id="start" name="trip-start7"
              value="2020-10-09" 
              min="2020-10-09" max="2030-12-31">
              <label for="start">Hasta</label>
              <input type="date" id="start1" name="trip-start8"
               value="2020-10-09" 
              min="2020-10-09" max="2030-12-31">
              <center><input type="submit" class="btn btn-info" value="Consultar Pagos"></center>
            </form>
            <?php
              if (isset($_POST['trip-start7'])) {
              $fec1=$_POST['trip-start7'];
              $fec2=$_POST['trip-start8'];
              $f1 = date("d/m/Y", strtotime($fec1));
              $f2 = date("d/m/Y", strtotime($fec2));
              $consulta=$conectar->query("select tipo_pago, count(*) as cantidad, sum(pago_total) as tot  from tiquete
                                          where fecha_funcion>='$f1' and fecha_funcion<='$f2'
                                          group by (tipo_pago)");
                echo "<table class=table>";
                echo "<thead class=thead-dark>";
                echo "<tr>";
                echo "<th ><center>  TIPO DE PAGO  </center></th>";
                echo "<th><center>  CANTIDAD </th></center>";
                echo "<th><center>  TOTAL </th></center>";
                echo "</tr>";
                echo "</thead>";

                foreach ($consulta as $it ) {
                $tot=$it['cantidad'];
                $nomp=$it['tipo_pago'];
                $val=$it['tot'];

                if ($tot!=null) {
                  
                   echo "<tr>";
                   echo "<td>";
                   echo "<center><label class=tabv >$nomp</label></center>";
                   echo "</td>";
                   echo "<td>";
                   echo "<center><label class=tabv >$tot</label></center>";
                   echo "</td>";
                   echo "<td>";
                   echo "<center><label class=tabv >$val</label></center>";
                   echo "</td>";
                   echo "</tr>";
                   echo "</table";
                }
              }
              }
             ?>
        </div>
        <div class=containercli>    
          <h3><center>CLIENTES</center></h3>
              <p></p>
            <form  method="post">
              <input type="date" id="start" name="trip-start9"
              value="2020-10-09" 
              min="2020-10-09" max="2030-12-31">
              <label for="start">Hasta</label>
              <input type="date" id="start1" name="trip-start10"
               value="2020-10-09" 
              min="2020-10-09" max="2030-12-31">
              <center><input type="submit" class="btn btn-info" value="Consultar Cliente"></center>
            </form>
            <?php
              if (isset($_POST['trip-start9'])) {
              $fec1=$_POST['trip-start9'];
              $fec2=$_POST['trip-start10'];
              $f1 = date("d/m/Y", strtotime($fec1));
              $f2 = date("d/m/Y", strtotime($fec2));
              $consulta=$conectar->query("select count(*) as conteo , u.tipo_usuario as usu from usuarios u
                                          join tiquete t on t.cod_usuario=u.cod_usuario
                                          where u.cod_usuario=t.cod_usuario and fecha_funcion>='$f1' and fecha_funcion<='$f2'
                                          group by(u.tipo_usuario) order by (conteo) desc");
                echo "<table class=table>";
                echo "<thead class=thead-dark>";
                echo "<tr>";
                echo "<th ><center>  TIPO DE CLIENTE  </center></th>";
                echo "<th><center>  CANTIDAD </th></center>";
                echo "</tr>";
                echo "</thead>";

                foreach ($consulta as $it ) {
                $tot=$it['conteo'];
                $nomp=$it['usu'];

                if ($tot!=null) {
                  
                   echo "<tr>";
                   echo "<td>";
                   echo "<center><label class=tabv >$nomp</label></center>";
                   echo "</td>";
                   echo "<td>";
                   echo "<center><label class=tabv >$tot</label></center>";
                   echo "</td>";
                   echo "</tr>";
                   echo "</table";
                }
              }
              }
             ?>
        </div>
    </div>  

    <div class="containerge3">
        <div class=containerfuncion>    
         <h3><center>REPORTE DE FUNCIONES</center></h3>
              <p></p>
            <form  method="post"> 
              <label for="start">Pelicula:</label>
              <input type="text" name="text1" >
              <p></p>
              <label for="start">Fecha: </label>
              <input type="date" id="start" name="trip-start11"
              value="2020-10-09" 
              min="2020-10-09" max="2030-12-31">
              <label for="start">Hora</label>
              <input type="time" name="horaf" min="12:00" max="23:00" step="0" value="12:00">
              <center><input type="submit" class="btn btn-info" value="Consultar Función"></center>
            </form>
            <?php
              if (isset($_POST['trip-start11'])) {
              $fec1=$_POST['trip-start11'];
              $f1 = date("d/m/Y", strtotime($fec1));
              $t1 =$_POST['text1'];
              $h1 = $_POST['horaf'];
              $consulta=$conectar->query("select p.nomb_pelicula as nombrep, count(*) as conteo, sum(t.pago_total) as 
                                          total from  tiquete t
                                          join peliculas p on  t.cod_pelicula=p.cod_pelicula
                                          where p.nomb_pelicula='$t1' and t.fecha_funcion='$f1' and t.hora_funcion='$h1'
                                          group by (p.nomb_pelicula)");
                echo "<table class=table>";
                echo "<thead class=thead-dark>";
                echo "<tr>";
                echo "<th ><center>  NOMBRE DE PELICULA  </center></th>";
                echo "<th><center>  CANTIDAD </th></center>";
                echo "<th><center>  TOTAL </th></center>";
                echo "</tr>";
                echo "</thead>";

                foreach ($consulta as $it ) {
                $nomp=$it['nombrep'];
                $tot=$it['conteo'];
                $val=$it['total'];

                if ($tot!=null) {
                  
                   echo "<tr>";
                   echo "<td>";
                   echo "<center><label class=tabv >$nomp</label></center>";
                   echo "</td>";
                   echo "<td>";
                   echo "<center><label class=tabv >$tot</label></center>";
                   echo "</td>";
                   echo "<td>";
                   echo "<center><label class=tabv >$val</label></center>";
                   echo "</td>";
                   echo "</tr>";
                   echo "</table";
                }
              }
              }
             ?>
        </div>
    </div>  

  </div>
    <?php
        include("footer.php");
    ?>
</body>