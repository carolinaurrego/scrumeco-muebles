<!DOCTYPE html>
<html lang="es">
<head>
	<title>ECO&MUEBLES</title>		
	<link rel="stylesheet" type="text/css" href="../css/estiloregist.css">
	<meta charset="utf-8">
	<meta name="keywords" content="MUEBLES">
	<meta name="description" content="">
	<meta name="author" content="TATIANA VARGAS">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
</head>
<body>
<header>
	<h1 id="tit">REGISTRO USUARIO</h1>
</header>

<form method="GET" action="../controlador/controladorregistro.php"> 
	<p>Hola! </P>
	<input type="hidden" class="ctexto" name="idusuario" ><br><br>
	<label>Tipo de Documento</label>
	<input type="text" class="ctexto" name="idtipos" placeholder="Digite 1 si es CC Y Digite 2 si es CE"><br><br>
	<label>Documento Usuario</label>
	<input type="text" class="ctexto" name="documentouser" ><br><br>
	<label>Nombres Usuario</label>
	<input type="text" class="ctexto"  name="nameuser"><br><br>																																	
	<label>Apellidos Usuario</label>
	<input type="text" class="ctexto"  name="apeuser"><br><br>
	<label>Correo Usuario</label>
	<input type="email" class="ctexto"  name="email" ><br><br>
	<label>Telefono</label>
	<input type="text" class="ctexto" name="tel"><br><br>
	<label>Clave Usuario</label>
	<input type="password" class="ctexto"  name="pass"><br><br>
	<label>Direccion</label>
	<input type="text" class="ctexto"  name="direc"><br><br>
	<label>Id Municipio</label>
	<input type="text" class="ctexto" name="idmuni"placeholder="Soacha"><br><br>
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
