<?php
    include("conexion_db.php");
    $conectar = conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineNet Software</title>
    <link rel="icon" type="imagen/png" href="img/icono.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <h1 align="center">CineNet Software</h1>
    <br>

    <div class="container" border='100'>
    <table class="table">
    <thead class="bg-info">
        <tr>
        <th scope="col">FACTURACIÓN</th>
        <th scope="col">REGISTROS</th>
        <th scope="col">CARTELERA</th>
        <th scope="col">FAQ</th>
        </tr>
    </thead>
    <tbody>

    <?php
        $result = $conectar->query("SELECT * FROM peliculas");
            foreach($result as $row){
            ?>
        <tr>
        
            <td> <?php echo $row['cod_pelicula'] ?> </td>
            <td> <?php echo $row['nomb_pelicula'] ?> </td>
            <td> <?php echo $row['genero'] ?> </td>
            <td> <?php echo $row['clasificacion'] ?> </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
    </table>
</div>

</body>
</html>
