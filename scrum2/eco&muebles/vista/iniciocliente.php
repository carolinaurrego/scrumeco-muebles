<?php
    session_start();
    $usuario=($_SESSION['user']);
    echo "<center> <h1> Bienvenid@ $usuario</h1> </center>";
?>
<!DOCTYPE HTML>
<html lange="en">
<head> 
    <link rel="icon" href="imagenes/pata.png">
    <meta charset="UTF-8">
    <title>harset="UTF-8">
    <title>ECO&MUEBLES</title>
    <link rel="stylesheet" href="../css/estilosiniciosesion.css">
</head>
    <! ––CIERRE DE SESION––>
    <form method="POST" action="../modelo/cerrarsesion.php">
        <input type="submit" name="cierre" value="Cerrar Sesión">
    </form>
    <! ––CIERRE DE SESION––>
    <div class="menu">
        <ul class="mul">
            <li class="mil"><a class="active" href="http://localhost/ejer.proyecto%20php/index.html">Inicio</a></li>
            <li class="mil"><a href="http://localhost/ejer.proyecto%20php/nosotros.php">Nosotros</a></li>
            <li class="mil"><a href="http://localhost/ejer.proyecto%20php/servicios.php">Nuestros Servicios</a></li>
            <li class="mil"><a href="http://localhost/ejer.proyecto%20php/galeria.php">Galeria</a></li>
            <li class="mil"><a href="http://localhost/ejer.proyecto%20php/formulariocontacto.php">Contactenos</a></li>
            <li class="mil"><a href="http://localhost/ejer.proyecto%20php/formulariocotizar.php">Cotizar</a></li>
        </ul>
        <br>
        <br>
        <img  class="logo"src="../logos/hogar.png">
             <div class="titulo">
            <strong> ECO & MUEBLES</strong>
            </div> 
            <p>
            <hr>
            <p>
    </div>
<body>
    <h2>Destacados </h2>
    <div>
        <div class="fondo">
            <br>
            <br>
        <div class="galeria">
            <img src="../img/11.jpg"width="210pX" height="160PX">
            <img src="../img/12.jpg"width="210pX" height="160PX">
            <img src="../img/13.jpg"width="210pX" height="160PX">
            <img src="../img/14.jpg"width="210pX" height="160PX">
            <img src="../img/15.jpg"width="210pX" height="160PX">
            
        </div>
        <br>
        
        <br>
        <div class="galeria">
            <img src="../img/16.jpg" width="210PX" height="160PX">
            <img src="../img/17.jpg"width="210PX" height="160PX">
            <img src="../img/18.jpg"width="210PX" height="160PX">
            <img src="../img/19.jpg"width="210PX" height="160PX">
            <img src="../img/20.jpg"width="210PX" height="160PX">
        </div>
        <br>
        <br>
        <div class="galeria">
            <img src="../img/21.jpg" width="210PX" height="160PX">
            <img src="../img/22.jpg"width="210PX" height="160PX">
            <img src="../img/23.jpg"width="210PX" height="160PX">
            <img src="../img/24.jpg"width="210PX" height="160PX">
            <img src="../img/25.jpg"width="210PX" height="160PX">
        </div>      
        <br>
        <br>
        <div class="galeria">
            <img src="../img/26.jpg" width="210PX" height="160PX">
            <img src="../img/27.jpg"width="210PX" height="160PX">
            <img src="../img/28.jpg"width="210PX" height="160PX">
            <img src="../img/29.jpg"width="210PX" height="160PX">
            <img src="../img/30.jpg"width="210PX" height="160PX">
        </div>  
    </div>
    </div>
    <br>
    <br>
    <br>
    <div>
        <center><h2>En que lugar te encuentras:</h2></center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <div class="soacha">
    <h3>Parque Soacha</h3>
        <a href="http://localhost/ejer.proyecto%20php/soacha.php"><img src="../logos/casa.png" style="width:210px;height:160px;"></a>
    </div>
    <div class="leon">
    <center><h3>Leon XIII</h3>
        <a href="http://localhost/ejer.proyecto%20php/leonxiii.php"><img src="../logos/casa.png" style="width:210px;height:160px;"></a></center>
    </div>
    <div class="olivos">
    <h3>Olivos</h3>
        <a href="http://localhost/ejer.proyecto%20php/olivos.php"><img src="../logos/casa.png" style="width:210px;height:160px;"></a>
    </div>
    
        
    
</body>
        <br>
        <br>
        <br>
        <footer>
            <div class="marginFooter">
                <h3>2021  ECO & MUEBLES  Comprometidos con el medio ambiente</h3>
            </div>
            <div class="marginFooter">
                <button><a class="active" href="http://localhost/ejer.proyecto%20php/index.html">Inicio</a></button>
                <button>Suscribete</button>
            </div>
        </footer>
</html>