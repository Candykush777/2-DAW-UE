/* 3. Modifica el ejercicio anterior para que todas las funciones pidan por parámetros
dos elementos. En el caso de que pase 1 o más de dos parámetros la ejecución
saltará un error de excepción */

let numero1;
let numero2;

while (true) {
  insertNumber1 = prompt("Por favor inserte el primer número : ");
  //insertNumber2 = prompt("Por favor ingrese el segundo número : "); asi no se prueba

  numero1 = parseInt(insertNumber1, 10);
  numero2 = insertNumber2 ? parseInt(insertNumber2, 10) : undefined; //ternario tengo que mirarlo bien

  if (
    !isNaN(numero1) &&
    (numero2 === undefined || !isNaN(numero2)) &&
    numero1 > 0
  ) {
    try {
      alert(`Sumar : ${suma(numero1, numero2)},
  Restar : ${resta(numero1, numero2)}, 
  Multiplicación : ${multiplicar(numero1, numero2)},
  División : ${dividir(numero1, numero2)}`);

      break;
    } catch (error) {
      alert(error.message);
    }
  } else {
    alert("Por favor introduce un número válido ¡¡ ");
  }
}

function validarParametros(a, b) {
  if (arguments.length !== 2) {
    throw new Error("Error : La función requiere exactamente dos parametros");
  }
}

function suma(a, b = 0) {
  validarParametros(a, b);
  return a + b;
}

function resta(a, b = 0) {
  validarParametros(a, b);
  return a - b;
}

function multiplicar(a, b = 0) {
  validarParametros(a, b);
  return a * b;
}

function dividir(a, b = 0) {
  validarParametros(a, b);
  if (b == 0) {
    return "No se puede dividir entre 0"; // Devuelve null para indicar que no se pudo realizar la división
  } else {
    return a / b;
  }
}
