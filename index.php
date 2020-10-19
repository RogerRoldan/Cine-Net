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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="container logo-nav-container">
            <a href="#" class="logo">CineNet</a>
            <nav class="navigation">
                <ul>
                    <li><a href="#">Facturación</a></li>
                    <li><a href="#">Registros</a></li>
                    <li><a href="#">Cartelera</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit provident aliquid dicta incidunt asperiores minus, debitis illo eligendi magnam neque nulla distinctio mollitia sunt porro ab voluptas vitae, ipsam eos.
            </p>
        </div>
    </main>

    <buttom class="btn btn-primary"> Boton </buttom>

    <footer class="footer">
     <div class="container">
        <p>Derechos reservados cinenet@software.com</p>
     </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
