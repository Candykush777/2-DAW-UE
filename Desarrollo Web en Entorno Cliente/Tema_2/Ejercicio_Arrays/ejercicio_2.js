/* 2. 
Crear un array vacío, luego generar 20 números al azar y guardarlos en un array.

Una vez generados realiza las siguientes acciones:

- Muestra por consola los pares
- Muestra por cosola todos los numeros
- Muestra el número máximo
- Muestra el número mínimo
- Muestra la media */

const array = [];

for (let i = 0; i < 20; i++) {
  let aleatorio = Math.floor(Math.random() * 100) + 1;

  array.push(aleatorio);
}
// Todos los numeros
console.log(array);

console.log("----------------");

//solo los pares

array.forEach((element) => {
  if (element % 2 === 0) {
    console.log(element);
  }
});

//otra manera

const paresArray = array.filter((num) => num % 2 === 0); // aqui lo haria dentro de una array , se puede poner lo que quieras num, numero etc

console.log(paresArray);

const paresArray2 = [];

// Filtrar solo los números pares y agregarlos a paresArray
for (let i = 0; i < array.length; i++) {
  if (array[i] % 2 === 0) {
    paresArray2.push(array[i]);
  }
}

// Mostrar solo los números pares
console.log("Números pares:");
console.log(paresArray2); // esta manera t elos mete tb en un array pero es mucho mas larga

// Muestra el número máximo y minimo

let maximo = Math.max(...array);

console.log(maximo);

let minimo = Math.min(...array);
console.log(minimo);

console.log("-----------------------");


//Muestra la media 

let suma=0;

let media;

for (let i = 0; i < array.length; i++) {
    suma += array[i];
    
}

media=suma/array.length;

console.log(media);





