// Clase Carta
class Carta {
  constructor(valor, palo) {
    this.valor = valor;
    this.palo = palo;
    this.puntos = this.calcularPuntos();
  }

  calcularPuntos() {
    if (this.valor === "A") {
      return 1;
    } else if (this.valor === "J" || this.valor === "Q" || this.valor === "K") {
      return 11;
    } else {
      return parseInt(this.valor);
    }
  }

  //Creamos un metodo para conseguir el nombre de la imagen de la carta
  /*  obtenerImagen() {
    return `./images/${this.valor}${this.palo}.png`;
  }
 */
}

// Clase Baraja
let sumaBanca = 0;
class Baraja {
  constructor() {
    this.palos = ["C", "D", "T", "P"];
    this.valores = [
      "A",
      "2",
      "3",
      "4",
      "5",
      "6",
      "7",
      "8",
      "9",
      "10",
      "J",
      "Q",
      "K",
    ];
    this.cartas = this.crearBaraja();
  }

  crearBaraja() {
    const cartas = [];

    let valor;
    let palo;
    for (palo of this.palos) {
      for (valor of this.valores) {
        cartas.push(new Carta(valor, palo));
      }
    }
    return cartas;
  }

  //Aqui utilizamos underscore.js para barajar

  barajar() {
    this.cartas = _.shuffle(this.cartas);
    console.log(this.cartas);
  } // Método para sacar cartas y mostrarlas

  mostrarCarta() {
    if (this.cartas.length > 0) {
      //esta lógica no hacia falta por el funcionamiento del juego pero esta bien ¡¡

      const carta = this.cartas.pop();
      // Crear y configurar la imagen de la carta
      const imagen = document.createElement("img");
      imagen.src = `./images/${carta.valor}${carta.palo}.png`;

      //Añadimos la imagen al tapete

      const tapete = document.querySelector("#cartas");
      tapete.append(imagen);
      return carta;
    } else {
      alert("No quedan cartas en la Baraja");
      return null; // esto esta bien para otros juego peor aqui no va a pasar.
    }
  }

  mostrarCartasBanca(callback) {
    sumaBanca = 0;
  
    // Función para sacar una carta y mostrarla
    const sacarYMostrarCarta = () => {
      const carta = this.mostrarCarta(); // Sacamos una carta
      
  
      sumaBanca += carta.puntos; // Sumamos los puntos de esa carta
  
      
  
      // Después de mostrar la carta, mostrar los puntos
      setTimeout(() => {
        alert(`La banca tiene: ${sumaBanca} puntos`); // Mostrar la puntuación después de la carta
      }, 1500); // Esperamos 1.5 segundos para mostrar el alert
  
      // Comprobar si la banca debe detenerse o continuar
      if (sumaBanca >= 17 && sumaBanca <= 21) {
        setTimeout(() => {
          alert(`¡¡La Banca se planta con ${sumaBanca} puntos!!`);
          callback(); // Finalizamos el juego llamando al callback
        }, 1500); // Esperamos antes de llamar al callback
      } else if (sumaBanca > 21) {
        setTimeout(() => {
          alert(`La banca ha perdido con ${sumaBanca} puntos, ¡¡Ha ganado el Jugador sin necesidad de jugar!!`);
          callback(); // Finalizamos el juego llamando al callback
        }, 1500); // Esperamos antes de llamar al callback
      }
    };
  
    // Crear un intervalo para sacar cartas de manera controlada
    const intervalo = setInterval(() => {
      sacarYMostrarCarta(); // Sacar y mostrar una carta
      // Si la banca se planta o pierde, detener el intervalo
      if (sumaBanca >= 17 || sumaBanca > 21) {
        clearInterval(intervalo); // Detenemos el intervalo
      }
    }, 3500); // Repite cada 2 segundos para dar tiempo entre cartas
  }
  
  

  mostrarCartaJugador() {
   

      const carta = this.cartas.pop(); 
      // Crear y configurar la imagen de la carta
      const imagen = document.createElement("img");
      imagen.src = `./images/${carta.valor}${carta.palo}.png`;

      //Añadimos la imagen al tapete

      const tapete = document.querySelector("#jugada");
      tapete.append(imagen);
      return carta;
  }
}
let sumaJugador = 0;

let jugadorPlantado = 0;
function pedirCarta() {
  if (jugadorPlantado) {
    return; // Si el jugador ya se plantó, no pedimos más cartas
  }

  // Agregamos un log para ver si se llama correctamente a la función
  console.log("Pidiendo carta...");
  
  const carta = baraja.mostrarCartaJugador(); // Muestra una carta
  
  if (carta) {
    // Esperamos un tiempo antes de mostrar los puntos
    setTimeout(() => {
      sumaJugador += carta.puntos;
      alert(`El jugador ha pedido una carta. Puntos actuales: ${sumaJugador}`);
    }, 1500); // Esperamos 0.5 segundos para mostrar la carta antes del alert
  }
}

function plantarse() {
  jugadorPlantado = true;
  alert(`¡El jugador se planta con ${sumaJugador} puntos!`);
  compararResultados(); // Comparamos los resultados después de que el jugador se plante
}

function turnoJugador() {
  // Desactivamos los botones de acción del jugador mientras la banca juega
  document.querySelector("#pedirCartaBtn").disabled = true;
  document.querySelector("#plantarseBtn").disabled = true;

  // Llamamos a la función mostrarCartasBanca con un callback
  baraja.mostrarCartasBanca(() => {
    // Ahora la banca ha terminado, habilitamos los botones del jugador
    document.querySelector("#pedirCartaBtn").disabled = false;
    document.querySelector("#plantarseBtn").disabled = false;
  });
}

function compararResultados() {
  // Si la banca ha perdido, no hace falta comparar
  if (sumaBanca > 21) {
    return; // No mostramos nada porque ya se mostró el mensaje en mostrarCartasBanca
  }

  // Comparamos puntos de la banca y el jugador
  if (sumaJugador > sumaBanca && sumaJugador <= 21) {
    alert(
      `¡El jugador gana con ${sumaJugador} puntos frente a ${sumaBanca} de la banca!`
    );
  } else if (sumaJugador < sumaBanca && sumaBanca <= 21) {
    alert(
      `La banca gana con ${sumaBanca} puntos frente a ${sumaJugador} del jugador.`
    );
  } else if (sumaJugador === sumaBanca && sumaJugador <= 21 ) {
    alert(`Empate con ${sumaJugador} puntos para el jugador y la banca.`);
  } else {
    alert(`El jugador se ha pasado de 21 puntos con ${sumaJugador} puntos.`);
  }

  finalizarJuego(); // Finalizamos el juego al comparar resultados
}

// Función para finalizar el juego
function finalizarJuego() {
  // Desactivar los botones de acción del jugador (por ejemplo, "Pedir carta" y "Plantarse")
  document.querySelector("#pedirCarta").disabled = true;
  document.querySelector("#plantarse").disabled = true;
  // Si deseas, aquí podrías reiniciar el juego o realizar otras acciones.

  alert("El juego ha terminado.");
}

// Función para que la banca saque cartas
function turnoBanca() {
  baraja.mostrarCartasBanca(); // La banca saca cartas según su lógica
}
const baraja = new Baraja();
baraja.barajar();
// Escuchadores de eventos para los botones
document.querySelector("#pedirCarta").addEventListener("click", pedirCarta);
document.querySelector("#plantarse").addEventListener("click", plantarse);
