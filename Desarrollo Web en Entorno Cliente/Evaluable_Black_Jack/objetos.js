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
  mostrarCartas() {
    // Limpiamos el contenedor antes de mostrar nuevas cartas
    const tapete = document.querySelector("#tapete");
    tapete.innerHTML = ""; // Limpiar cualquier carta previa

    // Mostrar las primeras 5 cartas como ejemplo
    for (let i = 0; i < 5; i++) {
      const carta = this.cartas[i]; // Tomamos una carta
      const imagen = document.createElement("img"); // Creamos una imagen para la carta
      imagen.src = `./images/${carta.valor}${carta.palo}.png`; // Asumimos que las imágenes están nombradas con valor + palo
      tapete.append(imagen); // Añadir la imagen al tapete
    }
  }
}

let baraja = new Baraja();
baraja.barajar();
baraja.mostrarCartas();
