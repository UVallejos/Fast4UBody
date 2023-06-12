  //Lógica para calcular IMC
function calcularIMC() {
      // Obtener valores de peso y altura del usuario
      var peso = document.getElementById("peso").value;
      var altura = document.getElementById("altura").value;

      altura = altura/100;

      console.log(peso);
      console.log(altura);

      // Calcular el IMC
      var IMC = peso / (altura * altura);

      console.log(IMC);

      // Crear mensaje de respuesta
      var mensaje = "Tu IMC es: " + IMC.toFixed(2) + ". ";

      // Determinar estado según el IMC
      var estado;
      switch(true) {
        case (IMC < 18.5):
          estado = "Bajo peso";
          break;
        case (IMC <= 25):
          estado = "Peso normal";
          break;
        case (IMC <= 30):
          estado = "Pre-obesidad o Sobrepeso";
          break;
        case (IMC <= 35):
          estado = "Obesidad clase I";
          break;
        case (IMC <= 40):
          estado = "Obesidad clase II";
          break;
        case (IMC <= 40):
          estado = "Obesidad clase III";
          break;
      }

      // Crear mensaje de estado
      mensaje += "Tu estado de IMC es: " + estado + ".";

      console.log(mensaje);

      // Encontrar el div que muestra los resultados
      var resultadoIMC = document.querySelector("#resultadoIMC");

      // Encontrar el elemento h5 dentro del div
      var resultadoH5 = resultadoIMC.querySelector("h5");

      // Actualizar el contenido del elemento h4 con el mensaje
      resultadoH5.innerHTML = mensaje;
}


//Lógica para calcular la actividad díaria 
function calcularCalorias() {
  // Obtener los valores de los inputs
  let sexo = document.querySelector('input[name="genero"]:checked').value;
  let edad = document.getElementById("edadC").value;
  let altura = document.getElementById("alturaC").value;
  let peso = document.getElementById("pesoC").value;
  let actividad = document.querySelector('input[name="actividad"]:checked').value;

  altura = altura / 100;

  // Calcular la tasa metabólica basal (TMB)
  let tmb;
  if (sexo === "hombre") {
    tmb = 88.362 + (13.397 * peso) + (4.799 * altura) - (5.677 * edad);
  } else if (sexo === "mujer") {
    tmb = 447.593 + (9.247 * peso) + (3.098 * altura) - (4.330 * edad);
  }

  // Calcular las calorías necesarias según el nivel de actividad física
  let calorias;
  switch (actividad) {
    case "sedentaria":
      calorias = tmb * 1.2;
      break;
    case "levemente-activa":
      calorias = tmb * 1.375;
      break;
    case "moderadamente-activa":
      calorias = tmb * 1.55;
      break;
    case "muy-activa":
      calorias = tmb * 1.725;
      break;
    case "extremadamente-activa":
      calorias = tmb * 1.9;
      break;
  }
  // Calcular calorías necesarias según nivel de actividad
  let caloriasNecesarias;
  if (actividad === "sedentario") {
    caloriasNecesarias = tmb * 1.2;
  } else if (actividad === "leve") {
    caloriasNecesarias = tmb * 1.375;
  } else if (actividad === "moderado") {
    caloriasNecesarias = tmb * 1.55;
  } else if (actividad === "activo") {
    caloriasNecesarias = tmb * 1.725;
  } else {
    caloriasNecesarias = tmb * 1.9;
  }

  // Calcular el déficit/superávit calórico para perder/ganar peso
  console.log(caloriasNecesarias);
  var caloriasParaBajar = caloriasNecesarias - (caloriasNecesarias * 0.20);
  var caloriasParaMantener = caloriasNecesarias;
  var caloriasParaSubir = caloriasNecesarias + (caloriasNecesarias * 0.20);

  // Crear mensaje de estado
  var mensajeBajar = "Para bajar de peso de forma saludable, necesitas consumir aproximadamente: " + (caloriasParaBajar.toFixed(2)) +" calorías al día.";
  var mensajeMantener = "Para mantener el peso actual, necesitas consumir aproximadamente: "+(caloriasParaMantener.toFixed(2))+ " calorías al día.";
  var mensajeSubir = "Para subir de peso, necesitas consumir aproximadamente: "+(caloriasParaSubir.toFixed(2))+ " calorías al día.";;

  console.log(mensajeBajar);
  console.log(mensajeMantener);
  console.log(mensajeSubir);


  //Seleccionamos mensaje para mostrar alusuario
  var mensajeCal = document.getElementById("mensajeCal");

  // Seleccionar celda de "calorias"
  var caloriasBajarTD = document.getElementById("caloriasBajar");
  var caloriasMantenerTD = document.getElementById("caloriasMantener");
  var caloriasSubirTD = document.getElementById("caloriasSubir");

  // Asignamos el contenido
  caloriasBajarTD.innerHTML = (caloriasParaBajar.toFixed(2));
  caloriasMantenerTD.innerHTML = (caloriasParaMantener.toFixed(2));
  caloriasSubirTD.innerHTML = (caloriasParaSubir.toFixed(2));
  mensajeCal.innerHTML = "Según los datos proporcionados, necesitarías consumir las siguientes cantidades de calorías diarias si tus objetivos son: ";


  console.log(caloriasBajarTD);
  console.log(caloriasMantenerTD);
  console.log(caloriasSubirTD);

}
