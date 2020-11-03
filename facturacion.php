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
    <link rel="stylesheet" href="css/facturacion.css?34532c5">
</head>

<body>
    <?php
        include("header.php");
    ?>

    <div class="container-fluid">
        <session class="main row">
            <article class="col-lg-6">
                <p>
                    <h3>Compra de tiquetes</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus culpa quo aperiam impedit tempora vel illum, quia expedita dolorum, hic quasi, dolorem dolor delectus soluta. Labore distinctio quam minima enim!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus culpa quo aperiam impedit tempora vel illum, quia expedita dolorum, hic quasi, dolorem dolor delectus soluta. Labore distinctio quam minima enim!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus culpa quo aperiam impedit tempora vel illum, quia expedita dolorum, hic quasi, dolorem dolor delectus soluta. Labore distinctio quam minima enim!
                </p>
            </article>

            <aside class="col-lg-6">
                <h3>Sillas disponibles</h3>
                <div>
                <div class="card" style="width: 18rem;">
                    <img src="img/p3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    <p></p>
                    </div>
                </div>
                
            </aside>
        </session>

        <div class="row">
            <div class="color1 col-md-3">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi dolores consectetur perferendis quia exercitationem eveniet nihil accusamus consequuntur. Aliquam rerum repellendus nesciunt! Autem ea qui id inventore recusandae doloremque rem.
                </p>
            </div>
            <div class="col-md-3">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi dolores consectetur perferendis quia exercitationem eveniet nihil accusamus consequuntur. Aliquam rerum repellendus nesciunt! Autem ea qui id inventore recusandae doloremque rem.
                </p>               
            </div>
            <div class="color1 col-md-3">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi dolores consectetur perferendis quia exercitationem eveniet nihil accusamus consequuntur. Aliquam rerum repellendus nesciunt! Autem ea qui id inventore recusandae doloremque rem.
                </p>
            </div>
            <div class="col-md-3">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi dolores consectetur perferendis quia exercitationem eveniet nihil accusamus consequuntur. Aliquam rerum repellendus nesciunt! Autem ea qui id inventore recusandae doloremque rem.
                </p>
            </div>
        </div>
    
    </div>


    <?php
        include("footer.php");
    ?>
</body>