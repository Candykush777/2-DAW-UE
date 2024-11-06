/* 5. 
Continuando con el ejercicio anterior, ves sacando por consola cartas de la
baraja cada 5 segundos. Hay que tener en cuenta que cuando una baraja se tiene que
quitar del mazo para que no pueda volver a salir. Una vez salga la varaba tendrás
que poner el siguiente mensaje:

```javascript
Carta KC
Valor: 13
Palo: C
Carta 7T
Valor: 7
``` */
const baraja = [];

function cardsGenerate(palo) {
  for (let i = 1; i <= 13; i++) {
    let carta;

    if (i <= 10) {
      carta = i;
    } else {
      switch (i) {
        case 11:
          carta = "J";

          break;

        case 12:
          carta = "Q";
          break;

        case 13:
          carta = "K";
          break;
      }
    }

    //añadimos las cartas

    baraja.push(carta + palo);
  }
}
cardsGenerate("c");
cardsGenerate("D");
cardsGenerate("R");
cardsGenerate("P");

//Mostrar baraja completa

console.log(`\nBaraja completa: ${baraja}`);

// baraja desordenada
let barajaDesordenada = _.shuffle(baraja);

console.log(`\nBaraja desordenada ${barajaDesordenada}`);

// sacar cartas cada 5 segundos

const intervalo = setInterval(() => {
  if (barajaDesordenada.length === 0) {
    console.log("Se han extraido todas las cartas");
    clearInterval(intervalo);
  } else {
    const cartaSacada = barajaDesordenada.pop();
    //console.log(`Carta extraida : ${cartaSacada}`); aqui probe si sale bien

    const valor = cartaSacada.slice(0, -1);
    const palo = cartaSacada.slice(-1);

    /* esto me lo formatea pero no sale colocado en la consola  */

    console.log(`Carta : ${cartaSacada} 
                    Valor : ${valor}
                    Palo : ${palo}`);
  }
}, 5000);
