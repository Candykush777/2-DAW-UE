class Jugador {
  constructor(nombre, posicion, valor) {
    this.nombre = nombre;
    this.posicion = posicion;
    this.valor = valor;
  }

}
class Equipo {
  constructor(nombre,  presupuesto) {
    this.nombre = nombre;
    this.plantilla = [];
    this.presupuesto = presupuesto;
  }

  ficharJugador(jugador) {
    this.plantilla.push(jugador); //Se agrega al jugador
  }

  listarPlantilla() {
    console.log(`Plantilla de ${this.nombre} : `);

    this.plantilla.forEach((jugador) => {
      console.log(
        `El nombre del jugador es ${jugador.nombre}, su posición es ${jugador.posicion},  y su valor es ${jugador.valor}`
      );
    });
  }
}



export { Jugador, Equipo };



