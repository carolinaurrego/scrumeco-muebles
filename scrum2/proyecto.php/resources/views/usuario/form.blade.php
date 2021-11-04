<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>


    <script src="javascript/sesion.js"></script>
</head>
      <div class="menu">
        <ul>
            <li><a class="active" href="http://localhost/ejer.proyecto%20php/index.html">Inicio</a></li>
            <li><a href="http://localhost/ejer.proyecto%20php/nosotros.php">Nosotros</a></li>
            <li><a href="http://localhost/ejer.proyecto%20php/servicios.php">Nuestros Servicios</a></li>
            <li><a href="http://localhost/ejer.proyecto%20php/galeria.php">Galeria</a></li>
            <li><a href="http://localhost/ejer.proyecto%20php/formulariocontacto.php">Contactenos</a></li>
            <li><a href="http://localhost/ejer.proyecto%20php/formulariocotizar.php">Cotizar</a></li>
        </ul>
        <br>
        <br>
        <img  class="logo"src="logos/hogar.png">
             <div class="titulo">
            <strong> ECO & MUEBLES</strong>
            </div>
            <p>
            <hr>
            <p>
    </div>
<body background="imagenes/25.jpg">
    <div class="login-page">

        <div class="form">
          <div id="RegisterForm" class="register-form">

              <h1>Registrate</h1>
            <input id="nombre" type="text" name='nombre' placeholder="Nombre" value="{{isset($usuario->nombre)?$usuario->nombre:''}}">

            <input id="email" type="email" name='correo' placeholder="Email" value="{{isset($usuario->correo)?$usuario->correo:''}}">

            <input id="contrasena" type="password" name='password' placeholder="Crear contrasena" value="{{isset($usuario->password)?$usuario->password:''}}">

            <!--  <button onclick="CrearUsuario();">Registrarme</button>-->
            <input type="submit"  value="guardar datos">
            </form>
          </div>
        </div>
      </div>
      <?php

    ?>
</body>
    <div class="frase">
        <center><h1>“Un cliente satisfecho es un trabajo bien hecho!”</h1></center>
    </div>
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
