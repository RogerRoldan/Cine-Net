<?php
    try{
        $conectar= new PDO('pgsql:host=localhost;dbname=cinenet', 'postgres', 'postgres') or die ("Error de Conexion".pg_last_error());
}catch(Exception $e){
    echo "Error" + $e;
}
// $registros = $result->prepare( $query ); //Preparamos la consulta
// $registros->execute( array(":usuario" => $usuario) ); //Le pasamos el valor al marcador, esto es un array por lo que soporta tanto valores requiera la query, separador por coma
// $registros = $registros->fetchAll( PDO::FETCH_OBJ );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <h1 align="center"> Cinenet Prueba</h1>
    <br>

<div class="container" border='100'>
    <table class="table">
    <thead class="bg-info">
        <tr>
        <th scope="col">CÓDIGO</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">EDAD</th>
        <th scope="col">EMAIL</th>
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
