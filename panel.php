<?php
    session_start();
    $varsesion = $_SESSION ['usuario'];

    if($varsesion == null || $varsesion = '')
    {
        echo 'Usted no tiene autorización';
        die();
    }

    ?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Panel de administracion</h1>
    <h2>Bienvenido: <?php echo $_SESSION ['usuario'] ?></h2>
    <a href="">Cerrar sesión</a>
    
</body>
</html>