/* 4. 
Crea un array vacío llamado baraja de tipo string. Mete de golpe todas las
cartas de la baraja francesa con el siguiente formato:

```javascript
1C,2C,3C,4C....,JC,QC,KC
1D,2D,3D,4D....,JD,QD,KD
1R,2R,3R,4R....,JR,QR,KR
1P,2P,3P,4P....,JP,QP,KP
```
Una vez creado el array baraja las cartas para que se desordenen. Puedes utilizar
alguna librería externa como por ejemplo underscore */

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



let barajaDesordenada = _.shuffle(baraja);

console.log(`\nBaraja desordenada ${barajaDesordenada}`);


