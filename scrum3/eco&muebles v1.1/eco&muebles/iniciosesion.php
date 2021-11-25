<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/estilosfsesion.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECO&MUEBLES</title>
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
<body background="imagenesgaleria/nuestro trabajo/galeria.jpg">
      <div class="contact_form">
          <form method="POST" action="controlador/validacionsesion.php">
            <div class="formulario">      
            <h1>Inicio de sesion</h1>     
            <p>
              <label for="email" class="colocar_email">Email
              <span class="obligatorio">*</span>
              </label>
              <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email">
            </p>    
                  
            <p>
              <label for="clave" class="colocar_clave">clave
              <span class="obligatorio">*</span>
              </label>
              <input type="password" name="introducir_clave" id="clave" required="obligatorio" placeholder="clave">
            </p>    
                  
                               
                  
              <button class="button1" type="submit" name="enviar_formulario" id="enviar"><p>Ingresar</p></button>
    
            <p class="aviso">
                <span class="obligatorio"> * </span>los campos son obligatorios.
            </p>          
                
             
        </div>  
    </form>
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

    
</body>
</html>