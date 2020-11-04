<?php
    include("conexion_db.php");
    include("boostraplink.php");
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
    <link rel="stylesheet" href="css/facturacion.css?342e3c5">
</head>

<body>
    <?php
        include("header.php");
    ?>

    <div class="container-fluid">
        <session class="main row">
            <article class="col-lg-6">  <!-- Comprar tiquetes-->
                
            <center><h3>Compra de tiquetes</h3></center>
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card border-primary"> <!-- gb-primary-->  <!-- m-5-->  <!-- py-5 -->
                        <div class="card-body">
                            <h1 class="px-5">Usuario</h1>

                            <form  method="POST">
                            <div class="form-row px-5">
                                <div class="col">
                                    <input type="text" name="codigo" class="form-control" placeholder="Código de usuario">
                                </div>
                                
                            </div>
                            

                            <div class="form-row py-5">
                                
                                <div class="px-5">
                                    <label for="start">Fecha:</label>
                                    <input type="date" id="start" name="trip-start"
                                        value="2020-10-22" min="2020-01-01" max="2050-12-31">
                                </div>

                                <div class="px-5">
                                   <input type="text" name="pelicula" placeholder="Nombre de la pelicula">
                                </div>
                                 <div class="px-5">
                                   <input type="text" name="tpago" placeholder="Tipo de pago">
                                </div>
                                 <div class="px-5">
                                   <input type="numeric" name="silla" placeholder="Numero de silla">
                                </div>

                            </div>

                                <div class="col">
                                  <center><input type="submit" name="buscar" class="btn btn-secondary" value="Buscar"></center>
                                </div>
                                </form>
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                            <th scope="col">Hora</th>
                                            <th scope="col">Formato</th>
                                            <th scope="col">Seleccionar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                <?php 
                                if (isset($_POST['buscar'])){
                                    $fech=$_POST['trip-start'];
                                    $f1=date("d/m/Y", strtotime($fech));
                                    $nombpel=$_POST['pelicula'];
                                    $codusu=$_POST['codigo'];
                                    $tipop=$_POST['tpago'];
                                    $sil=$_POST['silla'];
                                    
                                    $sql="select c.horario as hor , s.tipo_sala as format, s.cod_sala as cosal, p.cod_pelicula as copel from cartelera c 
                                                join salas s on c.cod_sala=s.cod_sala
                                                join peliculas p on p.cod_pelicula=c.cod_pelicula
                                                 where c.fecha='$f1' and p.nomb_pelicula='$nombpel'";
                                    $result=$conectar->query($sql);


                                foreach($result as $filas){?> 
                                      <tr>
                                      <td><?php echo $filas['hor'] ?></td>
                                      <td><?php echo $filas['format'] ?></td>
                                      <td>

                                        <a href="facturacion.php?id1=<?php echo $filas['copel'] ?>&id2=<?php echo $filas['cosal'] ?>&id3=<?php echo $filas['hor'] ?>&id4=<?php echo $f1 ?>&id5=<?php echo $codusu ?>&id6=<?php echo $tipop ?>&id7=<?php echo $sil ?>" class="btn btn-primary">Seleccionar</a>
                                      </td>
                                   </tr>
                                <?php } }?>
                                        </tbody>
                                    </table>

                            <div class="col">

                                    <form method="POST">
                                    <input type="submit" name="comprar" value="Comprar" class="form-control btn btn-success" >
                                    </form>
                                         <?php
                            
                                        if(isset($_POST['comprar'])){
                                        $copel=$_GET['id1'];
                                        $cosal=$_GET['id2'];
                                        $hor=$_GET['id3'];
                                        $f1=$_GET['id4'];
                                        $codusu=$_GET['id5'];
                                        $tipop=$_GET['id6'];
                                        $sil=$_GET['id7'];
                                        $cst="insert into tiquete values ('53','$codusu','t1','$copel','$cosal','$hor','$f1','$sil','$tipop','6400')";    
                                        $final=$conectar->query($cst);
                               
                                        }
                                    ?>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="col-lg-2"></div>
                
             
            </article>   <!-- Comprar tiquetes hasta aquí-->

            <!-- Sillas aqui-->
            <aside class="col-lg-6 py-5">

                <div class="col-lg-2"></div>
                <form method="post" action="facturacion.php">
                    <div class="card col-lg-8 color1">
                        <div class="wrapper">
                        <div><label>1 <input type="checkbox" id="box[]" value="1"></label></div>
                        <div><label>2 <input type="checkbox" id="box[]" value="2"></label></div>
                        <div><label>3 <input type="checkbox" id="box[]" value="3"></label></div>
                        <div><label>4 <input type="checkbox" id="box[]" value="4"></label></div>
                        <div><label>5 <input type="checkbox" id="box[]" value="5"></label></div>
                        <div><label>6 <input type="checkbox" id="box[]" value="6"></label></div>
                        <div><label>7 <input type="checkbox" id="box[]" value="7"></label></div>
                        <div><label>8 <input type="checkbox" id="box[]" value="8"></label></div>
                        <div><label>9 <input type="checkbox" id="box[]" value="9"></label></div>
                        <div><label>10 <input type="checkbox" id="box[]" value="12"></label></div>
                        <div><label>11 <input type="checkbox" id="box[]" value="11"></label></div>
                        <div><label>12 <input type="checkbox" id="box[]" value="12"></label></div>
                        <div><label>13 <input type="checkbox" id="box[]" value="13"></label></div>
                        <div><label>14 <input type="checkbox" id="box[]" value="14"></label></div>
                        <div><label>15 <input type="checkbox" id="box[]" value="15"></label></div>
                        <div><label>16 <input type="checkbox" id="box[]" value="16"></label></div>
                        <div><label>17 <input type="checkbox" id="box[]" value="17"></label></div>
                        <div><label>18 <input type="checkbox" id="box[]" value="18"></label></div>
                        <div><label>19 <input type="checkbox" id="box[]" value="19"></label></div>
                        <div><label>20 <input type="checkbox" id="box[]" value="20"></label></div>
                        <div><label>21 <input type="checkbox" id="box[]" value="21"></label></div>
                        <div><label>22 <input type="checkbox" id="box[]" value="22"></label></div>
                        <div><label>23 <input type="checkbox" id="box[]" value="23"></label></div>
                        <div><label>24 <input type="checkbox" id="box[]" value="24"></label></div>
                        <div><label>25 <input type="checkbox" id="box[]" value="25"></label></div>
                        <div><label>26 <input type="checkbox" id="box[]" value="26"></label></div>
                        <div><label>27 <input type="checkbox" id="box[]" value="27"></label></div>
                        <div><label>28 <input type="checkbox" id="box[]" value="28"></label></div>
                        <div><label>29 <input type="checkbox" id="box[]" value="29"></label></div>
                        <div><label>30 <input type="checkbox" id="box[]" value="30"></label></div>
                        <div><label>31 <input type="checkbox" id="box[]" value="31"></label></div>
                        <div><label>32 <input type="checkbox" id="box[]" value="32"></label></div>
                        <div><label>33 <input type="checkbox" id="box[]" value="33"></label></div>
                        <div><label>34 <input type="checkbox" id="box[]" value="34"></label></div>
                        <div><label>35 <input type="checkbox" id="box[]" value="35"></label></div>
                        <div><label>36 <input type="checkbox" id="box[]" value="36"></label></div>
                        <div><label>37 <input type="checkbox" id="box[]" value="37"></label></div>
                        <div><label>38 <input type="checkbox" id="box[]" value="38"></label></div>
                        <div><label>39 <input type="checkbox" id="box[]" value="39"></label></div>
                        <div><label>40 <input type="checkbox" id="box[]" value="40"></label></div>
                        </div>
                       
                    </div>
                    </form>
                <div class="col-lg-2"></div>
                
                <div class="alert alert-info text-center col-lg-12" role="alert">
                    (( PANTALLA DE CINE ))
                </div>
                <div class="col-lg-12"></div>

                
            </aside>  <!-- Sillas hasta aqui-->
        </session>

        
    
    </div>


    <?php
        include("footer.php");
    ?>
</body>