function recogeDatos(evento) {
  evento.preventDefault();

  var nombre = document.querySelector("#nombre").value;
  var fecha = document.querySelector("#fecha").value;
  
  var edad = 2019 - fecha;
 

   // BONUS: si quieres, puedes comprobar si alguno de los campos
  // está vacío y modificar el mensaje de bienvenida para pedir
  // Que se rellene

  if(nombre ==="" || fecha === ""){
    document.querySelector("#bienvenida").innerHTML="<p> Por Favor , rellene todos los campos.</p>";
    return;

    
  }

  // EJERCICIO: declara las variables necesarias (puedes necesitar
  // más de una) para componer el mensaje de bienvenida

  // EJERCICIO: Realiza la composició del mensaje final y cárgalo
  // en la variable que hayas preparado

  var mensajeEdad;



 // EJERCICIO: crea un condicional que dé un mensaje u otro en
  // función de la edad
if (edad >= 50){
  mensajeEdad="Persona madura"
}else if (edad <= 18 ){

mensajeEdad="Menor de edad "
}else{
  mensajeEdad="en la flor de la vida"
}

var mensaje = "<p>Hola, " + nombre + " tienes " + edad + " años, " + mensajeEdad;; 
//mensaje  = 
// EJERCICIO: Añade el mensaje final como contenido HTML del
  // nodo que hemos cargado en la variable bienvenida

  var bienvenida = document.querySelector("#bienvenida");
bienvenida.innerHTML =mensaje;

 


}

var miForm = document.querySelector("#formulario");

miForm.addEventListener("submit", recogeDatos);
