// Script de JavaScript para enviar solicitud AJAX
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    // Manipular los datos recibidos
    var usuarios = JSON.parse(this.responseText);
    // Renderizar tarjetas de usuario
    renderizarTarjetas(usuarios);
  }
};
xhttp.open("GET", "ajax-handler.php", true);
xhttp.send();

function renderizarTarjetas(usuarios) {
  var container = document.getElementById("tarjetas-container");
  usuarios.forEach(function(usuario) {
    // Crea y agrega las tarjetas al contenedor
    // Puedes utilizar document.createElement() y métodos similares aquí
  });
}
