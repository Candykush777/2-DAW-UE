let insertInput = document.querySelector("#ingresarNumero");

let btnGenerar = document.querySelector("#btn");

let resultPrimos = document.querySelector("#listarPrimos");

//evento

btnGenerar.addEventListener("click", () => {
  let insertarPrimo = parseInt(insertInput.value.trim());

  if (isNaN(insertarPrimo) || insertarPrimo <= 1) {
    Swal.fire({
      title: "Introduce un número válido",
      text: "Debe introducir un número mayor que 1",
      icon: "warning",
    });
    return;
  }
  //limpiamos resultados con inner

  resultPrimos.innerHTML = "";
  for (let i = 2; i <= insertarPrimo; i++) {
    if (esPrimo(i)) {
      let li = document.createElement("li");
      li.textContent = i;
      resultPrimos.append(li);
    }
  }
  Swal.fire({
    title: "Exito!!!",
    text: `numeros primos generados menores que:  ${insertarPrimo}`,
    icon: "success",
  });
});

function esPrimo(numero) {
  //condiciones para ver si es primo

  if (numero <= 1) {
    return false;
  }

  //comprobamos si tiene divisores sqrt es la raiz y asi se comprueba

  for (let i = 2; i <= Math.sqrt(numero); i++) { 
    if (numero % i === 0) {
      return false;
    }
  }
  return true;
}
