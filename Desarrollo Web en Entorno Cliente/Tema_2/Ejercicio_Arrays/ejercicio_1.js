/* 1. Dado el array = [1,2,3,4,5,6,7,8,9,10]

- Iterar por todos los elementos dentro de un array utilizando while y mostrarlos
en pantalla.

- Iterar por todos los elementos dentro de un array utilizando for y mostrarlos en
pantalla.

- Iterar por todos los elementos dentro de un array utilizando .forEach y
mostrarlos en pantalla.

- Mostrar todos los elementos dentro de un array sumándole uno a cada uno.

- Calcular la media de todos los elementos del array */


const array =[1,2,3,4,5,6,7,8,9,10];

console.log(array);


//con while 

let indice=0;

while(indice<array.length){

    console.log(array[indice]);
    indice++;
    
}


// con for

for (let i = 0; i < array.length ; i++) {


    
    console.log(array[i]);
    
    
}
console.log("------------------------");


for(const arrays of array){

   

    console.log(arrays);
    
}

console.log("------------------------");

// con forEach

array.forEach((element,i) => {
    console.log(element);
    
    
});

console.log("--------------------------");

//sumarle 1 a todos los elementos 

const resultado =[];
for (let i = 0; i < array.length ; i++) {



resultado.push(array[i]+1);
    
    
    
    
}console.log(resultado);

console.log("--------------------");

//calcular la media de todos los elementos del array 

let suma=0; // me estaba dando NaN por no igualar a 0, xq toma valor como undefined
let media;


for (let i = 0; i < array.length ; i++) {


    suma += array[i];
     
   
    
}

media= suma/array.length;
console.log(media);


