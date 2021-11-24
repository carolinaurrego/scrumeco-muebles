<!DOCTYPE html>
<html lang="es">
<head>
	<title>ECO&MUEBLES</title>		
	<link rel="stylesheet" type="text/css" href="../css/registron.css">
	<meta charset="utf-8">
	<meta name="keywords" content="MUEBLES">
	<meta name="description" content="">
	<meta name="author" content="DIANA URREGO">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
</head>
<body>

<body>
    
    <div class="negro">
        <center>
        <p>BIENVENIDOS</p>
        </center>
    </div>
    <div class="contenedor">
        <div >
            <img src="logos/hogar.png" alt="Avatar" class="logos"> 
        </div>
        <div class="titulo">
            <strong> ECO & MUEBLES</strong> 
        </div>
        <div class="buscar">
            <input class="buscar-text" type=" text" name="text" placeholder="Buscar...">  
            <select class="buscar-text" type="text" name="text"placeholder="Buscar...">
                <option value="Todas las Categorias">Todas las Categorias</option>
                <option value="Juego de Comedor">Juego de Comedor</option>
                <option value="Juego de Salas">Juego de Salas</option>
                <option value="Juego de Camas">Juego de Camas</option>
            </select>
        </div>
        <div class="sesion">
            <table>
                <tr>
                    <td>
                        <p id="sesion">
                            <a href="iniciosesion.php">Inicio Sesion</a>  /  <a href="../eco&muebles/vista/registrousuarios.php">registrar</a>
                        </p>
                        <p id="nombre" style="display: none;"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        MI CUENTA
                    </td>
                </tr>
            </table>

            <br>

            <img class="im" src="imagenes/usuarios.png">
        </div>
    </div>
    <div class="menu">
        <ul>
            <li><a class="active" href="http://localhost/scrum2/eco&muebles/index.html">Inicio</a></li>
            <li><a href="http://localhost/scrumeco-muebles/scrum2/eco&muebles/nosotros.php">Nosotros</a></li>
            <li><a href="http://localhost/ejer.proyecto%20php/servicios.php">Nuestros servicios</a></li>
            <li><a href="http://localhost/ejer.proyecto%20php/galeria.php">Galeria</a></li>
            <li><a href="http://localhost/ejer.proyecto%20php/formulariocontacto.php">Contactenos</a></li>
            <li><a href="http://localhost/ejer.proyecto%20php/formulariocotizar.php">Cotizar</a></li>
        </ul>
    </div>
<header>
	<h1 id="tit">REGISTRO USUARIO</h1>
</header>

<form method="GET" action="../controlador/controladorregistro.php"> 
	<p>Hola! </P>
	<label>Id Usuarios</label>
	<input type="text" class="ctexto" name="idusuario" ><br><br>
	<label>Id tipos</label>
	<input type="text" class="ctexto" name="idtipos" ><br><br>
	<label>Documento Usuarios</label>
	<input type="text" class="ctexto" name="documentouser" ><br><br>
	<label>Nombres Usuarios</label>
	<input type="text" class="ctexto"  name="nameuser"><br><br>																																	
	<label>Apellidos Usuarios</label>
	<input type="text" class="ctexto"  name="apeuser"><br><br>
	<label>Correo Usuarios</label>
	<input type="email" class="ctexto"  name="email" ><br><br>
	<label>Telefono</label>
	<input type="text" class="ctexto" name="tel"><br><br>
	<label>Clave Usuarios</label>
	<input type="password" class="ctexto"  name="pass"><br><br>
	<label>Direccion</label>
	<input type="text" class="ctexto"  name="direc"><br><br>
	<label>Id Municipios</label>
	<input type="text" class="ctexto" name="idmuni"><br><br>
	<label>Id Rol</label>
	<input type="text" class="ctexto"  name="idRol"><br><br>
	<label>Nombre Comuna</label>
	<input type="text" class="ctexto"  name="nomcomuna"><br><br>
	<input class="b1" type="submit"  name="register">
	
</form>
	<a id="v" href="listarusuarios.php"><button class="b1"> VOLVER LISTADO</button></a>
	
<footer>
	
</footer>

</body>
</html>
