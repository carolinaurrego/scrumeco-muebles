<!DOCTYPE HTML>
<html lange="en">
<head> 
    <link rel="icon" href="imagenes/pata.png">
    <meta charset="UTF-8">
    <title>ECO&MUEBLES</title>
    <link rel="stylesheet" href="css/estilosfcotizar.css">
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

    <div class="formulario">      
        <h1>para cotizar.....</h1>
        
        <p>
          <label for="nombre" class="colocar_}nombre">Nombre
          <span class="obligatorio">*</span>
          </label><input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
        </p>
              
        <p>
          <label for="email" class="colocar_email">Email
          <span class="obligatorio">*</span>
          </label>
          <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email">
        </p>
            
        <p>
          <label for="telefone" class="colocar_telefono">Teléfono
          </label>
          <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
        </p>    
        
              
        <p>
          <label for="ubicacion" class="colocar_ubicacion">Ubicación
          <span class="obligatorio">*</span>
          </label>
          <input type="text" name="introducir_ubiacion" id="ubicacion" required="obligatorio" placeholder="Escribe tu ubicacion">
        </p>    
              
        <p>
          <label for="mensaje" class="colocar_mensaje">Mensaje
          <span class="obligatorio">*</span>
          </label>                     
          <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
        </p>                    
              <form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
  <input type="file" name="imagen1" />
  <input type="submit" name="subir-imagen" value="Enviar imagen" />
</form>
          <button class="button1" type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>

        <p class="aviso">
            <span class="obligatorio"> * </span>los campos son obligatorios.
        </p>          
          <h2>una vez la empresa que elegiste haya recibido tu solicitud se pondra en contacto contigo en un maximo de 24 horas</h2>  
         
    </div>  
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





