//Función que permite modificar algunos campos de la cuenta de usuario al clicar "Editar"
function enableFields(){
    document.getElementById("name").readOnly = false;
    document.getElementById("email").readOnly = true;
    document.getElementById("altura").readOnly = false;
    document.getElementById("peso").readOnly = false;
    document.getElementById("pesoObjetivo").readOnly = false;
    document.getElementById("edit-btn").disabled = true;
    document.getElementById("save-btn").disabled = false;
}

//Función deshabilita los campos de la cuenta de usuario al clicar "Guardar"
function disableFields() {
    document.getElementById("name").readOnly = true;
    document.getElementById("email").readOnly = true;
    document.getElementById("altura").readOnly = true;
    document.getElementById("peso").readOnly = true;
    document.getElementById("pesoObjetivo").readOnly = true;
    document.getElementById("edit-btn").disabled = false;
    document.getElementById("save-btn").disabled = false;
  }

  //Cuando realizamos el guardado ejecutamos la función para deshabilitar la edición de los campos
  document.querySelector("form").addEventListener("submit", function(e) {
    disableFields();
  });