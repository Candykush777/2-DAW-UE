/* 7. 
Operaciones recurrentes

Pedir al usuario que introduzca por teclado dos números y mediante funciones
mostrar el resultado de todas las operaciones en un cuadro de alerta
Modificar el ejercicio anterior para que una vez introducidos los números aparezca
un cuadro de dialogo preguntando que si se quieren realizar las operaciones. En
caso de contestar que si aparecerán por consola y con un espacio de 2 segundos
entre cada una los resultados de la suma, resta, multiplicación y división. */

let numero1;
let numero2;

while (true) {
  let userInsert1 = prompt("Introduce el primer número : ");
  let userInsert2 = prompt("Introduce segundo número : ");

  numero1 = parseInt(userInsert1, 10);
  numero2 = parseInt(userInsert2, 10);

  if (!isNaN(numero1) && !isNaN(numero2) && numero1 > 0 && numero2 > 0) {
    let realizarOperaciones = confirm(" ¿Quieres realizar las operaciones ? ");

    if (realizarOperaciones) {
      console.log("Resultado de las operaciones : ");

      setTimeout(() => {
        console.log(`Sumar : ${suma(numero1, numero2)}`);
      }, 2000);

      setTimeout(() => {
        console.log(`Restar : ${resta(numero1, numero2)}`);
      }, 4000);

      setTimeout(() => {
        console.log(`Multiplicación : ${multiplicar(numero1, numero2)}`);
      }, 6000);

      setTimeout(() => {
        console.log(`División : ${dividir(numero1, numero2)}`);
      }, 8000);
    }

    /* console.log(`El resultado de la suma es : ${suma(numero1, numero2)} esto es in los 2 segundos ni nada, 
        El resultado de la resta es ${resta(numero1, numero2)}, 
        El resultado de la multiplicación es ${multiplicar(numero1, numero2)},
        El resultado de la división es ${dividir(numero1, numero2)}`); */

    /*  alert(`El resultado de la suma es : ${suma(numero1, numero2)}, 
        El resultado de la resta es ${resta(numero1, numero2)}, 
        El resultado de la multiplicación es ${multiplicar(numero1, numero2)},
        El resultado de la división es ${dividir(numero1, numero2)}`);
 */
    break;
  } else {
    alert("Introduce un número válido ¡¡ ");
  }
}

function suma(a, b) {
  return a + b;
}

function resta(a, b) {
  return a - b;
}

function multiplicar(a, b) {
  return a * b;
}
function dividir(a, b) {
  return a / b;
}
