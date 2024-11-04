/* 1. Operaciones funciones

Pedir al usuario que introduzca por teclado dos números y mediante funciones
mostrar el resultado de todas las operaciones en un cuadro de alerta */

//Lo mismo que he hecho 7 veces nates xDD


let numero1;
let numero2;


while (true) {

    insertNumber1=prompt("Por favor inserte el primer número : ");
    insertNumber2=prompt("Por favor ingrese el segundo número : ");

    numero1=parseInt(insertNumber1,10);
    numero2=parseInt(insertNumber2,10);
    


if (!isNaN(numero1) && !isNaN(numero2) && numero1 > 0  && numero2 >0) {

    alert(`Sumar : ${suma(numero1,numero2)},
           Restar : ${resta(numero1,numero2)}, 
           Multiplicación : ${multiplicar(numero1,numero2)},
           División : ${dividir(numero1,numero2)}`);


break;
    
}else{

    alert("Por favor introduce un número válido ¡¡ ")
}
}

function suma(a,b) {
    return a + b;
    
}

function resta(a,b) {
    return a - b ;
    
}

function multiplicar(a,b) {
    return a * b;
    
}

function dividir(a,b) {
    return a / b;
    
}