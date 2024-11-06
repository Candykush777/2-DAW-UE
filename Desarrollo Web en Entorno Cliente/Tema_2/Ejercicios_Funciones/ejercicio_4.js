/* 4. 
Tomando el ejercicio del tema anterior de las cartas, crea funciones que
realicen la siguiente funcionalidad:

- sacarCarta: la cual no admitirá nada por parámetros y sacará una carta de la
baraja

- obtenerInformacion: la cual admitirá por parámetros una carta y sacará por
consola el valor de dicha carta */

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

// Función sacarCarta: Saca una carta de la baraja
function sacarCarta() {
    if (barajaDesordenada.length === 0) {
      console.log("No quedan cartas en la baraja.");
      return;
    }

    const cartaSacada = barajaDesordenada.pop();
    console.log(`Carta extraida : ${cartaSacada}`);

obtenerInformacion(cartaSacada)}


    function obtenerInformacion(carta){

        const valor = carta.slice(0, -1);
        //const palo = cartaSacada.slice(-1);
    
        /* esto me lo formatea pero no sale colocado en la consola  */
    
        console.log(`Valor : ${valor}
                        `);}

                        sacarCarta();
    

// sacar cartas cada 5 segundos

const intervalo = setInterval(() => {
  if (barajaDesordenada.length === 0) {
    console.log("Se han extraido todas las cartas");
    clearInterval(intervalo);
  } else {
    



   
  sacarCarta();}//sacamos carta y mostramos su valor
}, 5000);