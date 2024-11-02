/* 6. 
Frases

Pedir al usuario que introduzca una frase por teclado. Tras meter la frase se
ejecutará la siguiente funcionalidad:

- Si la frase tiene menos de 10 letras, se volverá a pedir nuevamente
- Si tiene más de 10 letras aparecerá una alerta con la siguiente información:
- El dato introducido tiene:
- X letras
- X palabras
- X frases */

let insertFrase;

while (true) {
  insertFrase = prompt("Introduzca una frase : ");

  let nLEtras = insertFrase.length;

  if (nLEtras >= 10) {
    break;;
  }
  else{
    alert("LA frase tiene menos de 10 letras. Vuelve a Introducir");
  }
}
console.log(`La frase introducida es : ${insertFrase}`);

