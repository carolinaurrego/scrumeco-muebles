// este metodo se ejecuta antes de cargar la pagina
window.onload = function() {
    var query = window.location.search.substring(1);
    if (query.length != 0) {
        document.getElementById('sesion').style.display = 'none';
        var nombre = document.getElementById('nombre');
        nombre.style.display = 'block';
        nombre.innerHTML = query.toUpperCase();
    }
  };