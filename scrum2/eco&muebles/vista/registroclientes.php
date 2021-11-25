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
	<h1 id="tit">REGISTRO CLIENTES</h1>
</header>

<form method="POST" action="../modelo/controladorregclientes.php"> 
	<p>¡Bienvenido al Formulario de Registro! </P>
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
	<label>Seleccione la Comuna</label>
    <select name="nomcomuna">
      		<option value="Leon XIII">Leon XIII</option>
      		<option value="Despensa">Despensa</option>
            <option value="Olivos 1 sector ">Olivos 1 sector</option>
            <option value="Olivos 2 sector">Olivos 2 sector</option>
            <option value="Olivos 3 sector">Olivos 3 sector</option>
        </select>
        <br>
        <br>
    <input class="b1" type="submit"  name="register">
</form>
	<a id="v" href="../index.html"><button class="b1"> VOLVER AL INICIO</button></a>
	
<footer>
	
</footer>

</body>
</html>
