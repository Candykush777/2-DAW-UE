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
  Swal.fire({
    title: "Do you want to save the changes?",
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: "Save",
    denyButtonText: `Don't save`
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      Swal.fire("Saved!", "", "success");
    } else if (result.isDenied) {
      Swal.fire("Changes are not saved", "", "info");
    }
  });
