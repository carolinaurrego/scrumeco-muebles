<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estiloregist.css">
    <title>Administrador</title>
</head>
<body>
    <h1>Administrador</h1>
<header>
    <nav>
        <a href="../vista/administrador.php">Inicio</a>
        <a href="../vista/listarusuarios.php">Ver Usuarios</a>
    </nav>
</header>
    <div>
    <p id="p1">¡Bienvenido(a)  
    <?php
    session_start();
    $usua1=$_SESSION['user'];
    echo("$usua1");

    ?> !</p>
    <p>podra eliminar ,actualizar usuarios.</p>

    <form name="form2" method="POST" action="../modelo/cerrarsesion.php">
        <input class="b1" type="submit" name="button" value="Cerrar Sesión">		
    </form>
        
    </div>

</body>
</html>