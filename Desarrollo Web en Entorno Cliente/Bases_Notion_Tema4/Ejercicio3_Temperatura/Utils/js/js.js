let inputT = document.querySelector("#ingresarT");
let inputF = document.querySelector("#ingresarF");
let btnGenerar = document.querySelector("#generar");
let resultT = document.querySelector("#listaT");
//evento
btnGenerar.addEventListener("click", () => {
  //limpiamos resultados anteriores con Inner
  resultT.innerHTML = "";

  let temperaturaCelsius = parseFloat(inputT.value.trim());
  let temperaturaFahrenheit = parseFloat(inputF.value.trim());

  if (isNaN(temperaturaCelsius) && isNaN(temperaturaFahrenheit)) {
     Swal.fire({
      title: "Introduce un número válido",
      text: "Debe introducir un número ",
      icon: "warning",
    });
    return;
  }
  //Se ingresa temperatura Celsius
  if (!isNaN(temperaturaCelsius)) {
    let temperaturaFahrenheit = (temperaturaCelsius * 9) / 5 + 32;
    let p = document.createElement("p");
    p.textContent = `La temperatura es: ${temperaturaFahrenheit.toFixed(2)} ºF`;
    resultT.append(p);
    Swal.fire({
      title: "Exito!!!",
      text: `La conversion es :   ${temperaturaFahrenheit.toFixed(2)} ºF`,
      icon: "success",
    });
  }
  //Se ingresa temperatura Fahrenheit
  if (!isNaN(temperaturaFahrenheit)) {
    let temperaturaCelsius = ((temperaturaFahrenheit - 32) * 5) / 9;

    let p = document.createElement("p");
    p.textContent = `La temperatura es: ${temperaturaCelsius.toFixed(2)} ºC`;
    resultT.append(p);
    Swal.fire({
      title: "Exito!!!",
      text: `La conversion es :   ${temperaturaCelsius.toFixed(2)} ºC`,
      icon: "success",
    });
  }
  // Limpiar los inputs después de la conversión
  inputT.value = "";
  inputF.value = "";
});

