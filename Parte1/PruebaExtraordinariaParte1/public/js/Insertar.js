function espaciosVacios() {

  var nombre = document.getElementById('nombre').value;
  var participantes = document.getElementById('participantes').value;

  if (nombre.length == 0) {
    alert("Rellena el campo nombre");
    return false;
  }

  if (participantes.length == 0) {
    alert("Rellena el campo participantes");
    return false;
  }
}
