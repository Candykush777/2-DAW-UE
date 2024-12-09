/* 5. Operaciones

Pedir dos números por teclado y mostrar en una alerta todos las operaciones

posibles para dichos números (suma, resta, multiplicación y división).

Adicionalmente el programa hará lo siguiente: 

- si se introduce números menores que 0 o letras que salte una alerta indicando el
error y el programa parará

- tras mostrar todas las operaciones se pedirá confirmación al usuario para que
indique si quiere continuar realizando operaciones: en caso positivo el programa
volverá a empezar. En caso negativo el programa parará

- si se detecta que alguna de las operaciones es negativa el programa parará tras
realizar todas las operaciones de los números */

let pedirnumber1 = prompt("Introduce el primer número : ");
let pedirNumber2 = prompt("Introduce el segundo número : ");

while (true) {
  let numero2 = parseInt(pedirNumber2, 10);
  let numero1 = parseInt(pedirnumber1, 10);

  if (!isNaN(numero1) && !isNaN(numero2) && numero1 > 0 && numero2 > 0) {
    alert(`
           Resultado Suma : ${suma(numero1,numero2)}, 

           Resultado Resta : ${resta(numero1,numero2)},

           Resultado multiplicación : ${multiplicar(numero1,numero2)}, 

           Resultado división : ${dividir(numero1,numero2)}`);
    break;
  } else {
    alert("Numero menor 0, o letra , ERROR ¡¡¡¡");
    break;
  }
}

function suma(a, b) {

    let sumar= a+b;
  return sumar;
}

function resta(a, b) {

    let restar =a - b;
  return restar;
}

function multiplicar(a, b) {

    let multiplicación =a * b;
  return multiplicación;
}

function dividir(a, b) {

    let división = a / b;
  return división;
}
