//const Swal = require('sweetalert2');
//import Swal from 'sweetalert2';

let nombre = "Edu";
//let edad = 43;

console.log(nombre);
console.log(`Hola ${nombre} es el primer programa en JS`);

//interacción con el usuario

//alert("Bienvenido  a la página");
//alert(`Bienvenido ${nombre} a la página`); saca info sin al posibilidad de hacer nada

// let edad = prompt("Por favor introduce tu edad"); //retorna un tipo de dato , el que hayas metido, string, number etc

/* let edad = parseInt(prompt("Por favor introduce tu edad"));//string otra manera es donde parseInt - Number 
if(isNaN(edad)){

    alert("Dato incorrecto")
}else{
    alert(`Tu edad es de ${edad}` );
} */

/* let contiuar = confirm("Estas seguro que quieres contiuar?"); //boolean

if (contiuar) {
  let edad = Number(prompt("Por favor introduce tu edad")); //string otra manera es donde parseInt - Number
  if (isNaN(edad)) {
    alert("Dato incorrecto");
  } else {
    alert(`Tu edad es de ${edad}`);
  }
} else {
  alert("No quiere continuar");
} */

//alert(`Tu edad es de ${edad}`);

/* Swal.fire({
    title: "Good job!",
    text: "You clicked the button!",
    icon: "success"
  }); */
  /* Swal.fire({
    title: "Do you want to save the changes?",
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: "Save",
    denyButtonText: `Don't save`
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below 
    if (result.isConfirmed) {
      Swal.fire("Saved!", "", "success");
    } else if (result.isDenied) {
      Swal.fire("Changes are not saved", "", "info");
    }
  }); 
  */
// los metodos en java tenian que estar dentro de LAS CLASES
//funcion nombre(){}
// Se esperaba una declaracion o una instruccion

console.log(sumar(4,7, 7)); // no falla el 7 sigue saliendo 11, existen parametros invisibles 
console.log(sumar(4)); // NaM param2= 0 , si es numero ya y lee 4

function saludar(nombre){

  console.log(`Hola ${nombre}, primera función relaizada en js`);

}

console.log("---------------------");
console.log(sumar());
console.log(sumar(6));

/* function sumar(param1, param2 = 0){

  console.log(`Parametro 1 : ${param1} Parametro 2 : ${param2}`);

  return param1 + param2;
} */
function sumar(param1 = 0, param2 = 10){ // los parametros = 0 deben ser lso segundos, xq los primeros no tienen sentido

  console.log(`Parametro 1 : ${param1} Parametro 2 : ${param2}`);

  return param1 + param2;
}

console.log("Vamos a multiplicar dos numeros");
multiplicar(4,6,8,9,6);
console.log("------------------------");
//console.log(multiplicar( 3,4));

function multiplicar(param3, param4){

  console.log(`Parámetro 3 : ${param3} Parametro 4 : ${param4}`);

  console.log(param3 * param4);

  //argumentos invisibles

  console.log(arguments.length);
}



// Arrow function -> Lambda. escrita de forma muy rápida, centrada en el cuerpo
//PArametros tantos vcomo quieras, let variable(param1, param1)  =>{cuerpo de la funcion} suele estar asociada a una variable
let sumaFlecha= (param1, param2) =>{
  console.log(param1 + param2);
};

console.log("------------------------");

 let restaFlecha=(param1,param2) => {console.log(param1 - param2); 

  return 5; // explicitamente me saca el 5, pero aun asi me saca el 7 de restaFlecha
 }
 console.log("------------------------");

 console.log(restaFlecha(8,1));

//en el cuerpo si no pongo{}, es d euna sola linea en el cuerpo, y esta es
console.log("------------------------");

sumaFlecha(4,4); //las variables primero las declaras y luego las llamas, als funcines da igual ¡¡
//restaFlecha(6,3);


