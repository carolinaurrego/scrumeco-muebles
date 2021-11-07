class Usuario {
    constructor(nombre, apellido, email, contrasena) {
        this.nombre = nombre;
        this.apellido = apellido;
        this.email = email;
        this.contrasena = contrasena;
    }

    // metodo de clase
    isValid() {
        return this.nombre.length != 0 & this.apellido.length != 0 & this.email.length != 0 & this.contrasena.length != 0
    }
}

function CrearUsuario() {
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var email = document.getElementById('email').value;
    var contrasena = document.getElementById('contrasena').value;

    // creo la instancia del objeto usuario
    var usuario = new Usuario(nombre, apellido, email, contrasena);

    if (usuario.isValid()) {
        alert('usuario  ' + usuario.nombre + '  creado');
        document.location = "index.html?" + usuario.nombre;
    } else {
        alert('error');
    }
   
}