//array -> colección de datos

const equipos = ["Barcelona", "Madrid", "Bilbao", "Atletico"];
// se puede meter equipos tanto si esta vacio como si no no se puede equipos =[];

//const numeros=[7];

equipos[4] = "Osasuna";
//equipos[10]= "villarreal";

console.log(equipos);
/* console.log(equipos[0]);
console.log(equipos[2]);
console.log(equipos[3]);
console.log(equipos[4]); */

//fori en su totalidad - for de inicio a final

/* for (let index = 0; index < equipos.length; index++) {
    const equipo= equipos[index];
    console.log(equipo);
    
    
} */

for (const equipo of equipos) {
  // te da los index, las posiciones que hay
  console.log(equipo);
}

//foreach diferente a java, no es un bucle, e suna funcion que permite iterar
//con tres parametros, elemento, indice, y lo que recorres
/* equipos.forEach(( value, index, array ) => {


}); */

// element -> MAdrid

console.log("-------------------------------------------");

equipos.forEach((element, i) => {
  // element = BArcelona, Madrid etc
  if (i % 2 == 0) {
    // i = posiciones, 0,1,2,3,4...
    console.log(element); // sacamos los elementos de las posiciones pares
  }
});

console.log("------------------------------------------");

equipos.forEach((element, i) => {
  if (i % 2 == 1) {
    console.log(element); // sacamos los elementos de las posiciones impares
  }
});

//puedo añadir elementos
equipos.push("Getafe", "Rayo"); // coloca el/los elementos en el final de array
console.log(equipos.unshift("Alaves", "Las Palmas ")); //coloca al principio , posiciones 6, elementos 7
console.log(equipos);

//borrar elementos

console.log("------------------------------------");

console.log(`Elemento eliminado correctamente ${equipos.pop()}`); //elimina el ultimo elemento del array

console.log(`Elemento eliminado correctamente ${equipos.shift()}`); //elimina el primer elemento del array

//equipos.shift();

console.log(equipos);

//filtrar
//find -> retorna el primer elemento que coincida con la busqueda
//Vamos a buscar un equipo que tenga al menos 7 letras

//equipos.find(item, index, array); //si utilizas tres, pones 3, si vas a utilizar uno pones uno solo

let busqueda =equipos.find((item ) =>{ // retornar true cuando item cumple la condicion de busqueda

return item.length >=9;


});

console.log(busqueda); // devuelve el primero que tiene 7 letras 



//filter ->retorna todos los elementos que conciden con la busqueda

let busquedaTotal =equipos.filter((item) =>{

    return item.length >=7;  //me devuelve el array qeu cumpla esas condiciones

});
console.log(busquedaTotal);

console.log("-------------------");

equipos.filter((item) =>{

    return item.length >=7;
}).forEach((item) =>{
    console.log(item);

});





