/* 2. Modifica el ejercicio anterior para que en el caso de no introducir un sengundo
parámetros, el valor por defecto que tomará el segundo operadores será de 0 */

let numero1;
let numero2;


while (true) {

    insertNumber1=prompt("Por favor inserte el primer número : ");
    insertNumber2=prompt("Por favor ingrese el segundo número : ");

    numero1=parseInt(insertNumber1,10);
    numero2 = insertNumber2 ? parseInt(insertNumber2, 10) : undefined;
    


if (!isNaN(numero1) && (numero2 ===undefined || !isNaN(numero2)) && numero1 > 0  ) {

    alert(`Sumar : ${suma(numero1,numero2)},
           Restar : ${resta(numero1,numero2)}, 
           Multiplicación : ${multiplicar(numero1,numero2)},
           División : ${dividir(numero1,numero2)}`);


break;
    
}else{

    alert("Por favor introduce un número válido ¡¡ ")
}
}

function suma(a,b = 0) {
    return a + b;
    
}

function resta(a,b = 0) {
    return a - b ;
    
}

function multiplicar(a,b = 0) {
    return a * b;
    
}

function dividir(a, b = 0) {
    if (b == 0) {
        
        return "No se puede dividir entre 0"; // Devuelve null para indicar que no se pudo realizar la división
    } else {
        return a / b;
    }
    
}