class Jugador {
  constructor(nombre, posicion, valor) {
    this.nombre = nombre;
    this.posicion = posicion;
    this.valor = valor;
  }
}
class Equipo {
  constructor(nombre, presupuesto) {
    this.nombre = nombre;
    this.plantilla = [];
    this.presupuesto = presupuesto;
  }

  ficharJugador(jugador) {
    if (this.presupuesto < jugador.valor) {
      console.log(
        `El equipo ${this.nombre} no tiene presupuesto para fichar a este jugador`
      );
    } else {
      this.presupuesto -= jugador.valor;
      console.log(
        `El Equipo ${this.nombre}  ha fichado a ${jugador.nombre}, con la posicion ${jugador.posicion}, Este es el presupuesto restante : ${this.presupuesto} al equipo ¡¡`
      );
    }
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

  presupuestoEquipos() {
    //Me gustaria poner aqui un resumen del presupuesto que queda en lso equipos despues de los fichajes

    console.log(
      `Presupuesto restante del equipo ${this.nombre}: ${this.presupuesto} €`
    );
  }
}

export { Jugador, Equipo };
