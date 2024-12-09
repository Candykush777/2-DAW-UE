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
let nLEtras;
let nPalabras;

while (true) {
  insertFrase = prompt("Introduzca una frase : ");

  const sinEspacios=insertFrase.replace(/[.,?¿¡!]/g, "").replace(/\s/g, "");//expresions regulares mas precisas

   nLEtras = sinEspacios.length;

  if (nLEtras >= 10) {
    break;;
  }
  else{
    alert("La frase tiene menos de 10 letras. Vuelve a Introducir");
  }

 // alert("");
}

const palabras=insertFrase.trim().split(/\s+/); //expresiones regulares hacen mas preciso y limpio el código
nPalabras = palabras.length;

const nFrases=insertFrase.split(/[.?!]/).filter(frase =>frase.trim().length > 0).length;

alert(`La frase introducida es : ${insertFrase}, 
       El número de letras sin contar espacios es : ${nLEtras}, 
       El número de palabras de la frase es : ${nPalabras}, 
       El número de frases es : ${nFrases}`);


/* console.log(`La frase introducida es : ${insertFrase}`);
console.log(`El número de letras sin contar espacios es : ${nLEtras}`);
console.log(`El número de palabras de la frase es : ${nPalabras}`);
console.log(`El número de frases es : ${nFrases}`); */






