/* 5. Realiza un programa que permita introducir al usuario cual es el valor de la
casa que se va a comprar. Para ello el programa nada más iniciar pedirá:
- Precio de la casa que se va a comprar
- Dinero que le va a pedir al banco
- Número de años en los que lo va a devolver
- % de interes que se le va a aplicar
Una vez introducidos todos estos datos, y mediantes funciones se deberá mostrar la
tabla de amortización que tendrá el pago de la hipoteca. Por ejemplo para unos
datos introducidos de;
- Valor de la casa 450000€
- Dinero pedido al banco: 200000€
- Años a pagar: 15
- Intereses aplicados: 1,5%
La tabla de amortización será la siguiente
```javascript
hipoteca.js:17 Vas a pagad una cantidad de 500000 ya con intereses en 120
mensualidades con un importe mensual de 4167
hipoteca.js:25 Pago correspondiente al mes 1 con una cantidad de 495833
hipoteca.js:25 Pago correspondiente al mes 2 con una cantidad de 491667
hipoteca.js:25 Pago correspondiente al mes 3 con una cantidad de 487500
hipoteca.js:25 Pago correspondiente al mes 4 con una cantidad de 483333
hipoteca.js:25 Pago correspondiente al mes 5 con una cantidad de 479167
hipoteca.js:25 Pago correspondiente al mes 6 con una cantidad de 475000
hipoteca.js:25 Pago correspondiente al mes 7 con una cantidad de 470833
hipoteca.js:25 Pago correspondiente al mes 8 con una cantidad de 466667
``` */

console.log("----------HOMEBUYER APP----------");

let prestamo;
let precio;
let nAnios;
let interes;

while (true) {
  let InsertPrecio = prompt("Introduzca el importe de la compra : ");
  let InsertPrestamo = prompt("Introduzca credito necesario : ");
  let InsertnAnios = prompt("Introduzca el nº de años amortizar : ");
  let InsertInteres = prompt("Introduzca el % de interés a aplicar : ");

  precio = parseFloat(InsertPrecio);
  prestamo = parseFloat(InsertPrestamo);
  nAnios = parseInt(InsertnAnios, 10);
  interes = parseFloat(InsertInteres);

  if (
    !isNaN(precio) &&
    !isNaN(prestamo) &&
    !isNaN(nAnios) &&
    !isNaN(interes) &&
    prestamo > 0 &&
    precio > 0 &&
    nAnios > 0 &&
    interes > 0
  ) {
    break;
  } else {
    alert("Error, has introducido datos incorrectos");
  }
}




// Función para calcular el pago mensual
function calcularPagoMensual() {
  const tasaInteresMensual = interes / 12  // Tasa de interés mensual
  const totalMeses = nAnios * 12;  // Número total de meses

  // Fórmula de pago mensual
  const pagoMensual = (prestamo * (tasaInteresMensual / 100)) / 
  (1 - Math.pow(1 + (tasaInteresMensual / 100), -totalMeses));
  return pagoMensual;
}
const cuotaMensual = calcularPagoMensual();
const totalConIntereses = cuotaMensual * nAnios * 12 ;
const aportacion=precio-prestamo;
let totalReal=totalConIntereses+aportacion;

console.log(
    `Vas a pagar una cantidad de ${totalReal.toFixed(2)} ya con intereses en ${nAnios * 12} mensualidades con un importe mensual de ${cuotaMensual.toFixed(2)}`
  );
  
  // Tabla de amortización
  let saldoRestante = totalConIntereses ;
  
  for (let mes = 1; mes <= nAnios * 12; mes++) {
    saldoRestante -= cuotaMensual;
    console.log(
      `Pago correspondiente al mes ${mes} con una cantidad de ${saldoRestante.toFixed(2)}`
    );
  }





/* - Valor de la casa 450000€
- Dinero pedido al banco: 200000€
- Años a pagar: 15
- Intereses aplicados: 1,5%
La tabla de amortización será la siguiente
```javascript
hipoteca.js:17 Vas a pagad una cantidad de 500000 ya con intereses en 120
mensualidades con un importe mensual de 4167
hipoteca.js:25 Pago correspondiente al mes 1 con una cantidad de 495833 */
