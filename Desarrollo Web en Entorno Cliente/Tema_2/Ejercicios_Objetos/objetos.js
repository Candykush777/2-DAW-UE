import { Jugador, Equipo } from './equipo.js'; 



const equipo1=new Equipo("Barsa", 20000000);
const equipo2=new Equipo("Madrid",  30000000);
const equipo3=new Equipo("Atleti",  15000000);

const jugador1=new Jugador("Ronaldo", "Delantero",1000000);
const jugador2=new Jugador("Messi", "Delantero",1500000);
const jugador3 =new Jugador("Ramos","Defensa",500000);
const jugador4 = new Jugador("Benzema", "Delantero", 800000);
const jugador5 = new Jugador("Neymar", "Delantero", 900000);
const jugador6 = new Jugador("Mbappé", "Delantero", 950000);
const jugador7 = new Jugador("Vinicius", "Delantero", 950000);
const jugador8 = new Jugador("Kante", "Centrocampista", 400000);
const jugador9 = new Jugador("De Bruyne", "Centrocampista", 700000);
const jugador10 = new Jugador("Pogba", "Centrocampista", 600000);
const jugador11 = new Jugador("Salah", "Delantero", 850000);
const jugador12 = new Jugador("Modric", "Centrocampista", 550000);
const jugador13 = new Jugador("Lewandowski", "Delantero", 1000000);
const jugador14 = new Jugador("Sterling", "Delantero", 650000);
const jugador15 = new Jugador("Van Dijk", "Defensa", 600000);


equipo1.ficharJugador(jugador2);
equipo1.ficharJugador(jugador15);
equipo1.ficharJugador(jugador4);
equipo1.ficharJugador(jugador7);
equipo1.ficharJugador(jugador14);
equipo2.ficharJugador(jugador3);
equipo2.ficharJugador(jugador5);
equipo2.ficharJugador(jugador6);
equipo2.ficharJugador(jugador8);
equipo2.ficharJugador(jugador1);
equipo3.ficharJugador(jugador9);
equipo3.ficharJugador(jugador10);
equipo3.ficharJugador(jugador11);
equipo3.ficharJugador(jugador12);
equipo3.ficharJugador(jugador13);


equipo1.listarPlantilla();
console.log("----------------------------------------------------------------------");
equipo2.listarPlantilla();
console.log("----------------------------------------------------------------------");
equipo3.listarPlantilla();

function mostrarJugadoresMasCaros(equipo){

    equipo.plantilla.sort((a,b) => b.valor - a.valor);
 
    let masCaros3 =equipo.plantilla.slice(0,3);// tb se podria a.valor -b.valor y slice(-3) saca los 3 ultimos valores que serian los 3 mas caros
    
    console.log(`Los tres jugadores del equipo ${equipo.nombre} :`);
 
    masCaros3.forEach(jugador =>{
 
     console.log(`Nombre : ${jugador.nombre}, Posición : ${jugador.posicion}, Valor : ${jugador.valor} €`);
     
    });
     
 
 
 }
mostrarJugadoresMasCaros(equipo1);
mostrarJugadoresMasCaros(equipo2);
mostrarJugadoresMasCaros(equipo3);
