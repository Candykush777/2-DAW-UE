/* 4. 
Comparación de fechas:

Realiza un programa que pida por prompt el día, mes y año de tu cumpleaños. 

Indica cuantos días han pasado desde tu cumpleaños hasta el día de hoy */

let fechaActual = new Date();
let resultado;

while (true) {
  let dia = prompt("Introduce tu dia nacimiento : ");
  let mes = prompt("Introduce el mes de tu cumpleaños (1-12) : ");
  let anio = prompt("Introduce el año de tu cumpleaños : ");

  dia = parseInt(dia, 10);

  mes = parseInt(mes, 10);

  anio = parseInt(anio, 10);

  if (
    !isNaN(dia) &&
    !isNaN(mes) &&
    !isNaN(anio) &&
    dia <= 31 &&
    dia > 0 &&
    mes > 0 &&
    mes <= 12 &&
    anio > 1900
  ) {
    let fechaNAcimiento = new Date(anio, mes - 1, dia);

    resultado = fechaActual.getFullYear() - fechaNAcimiento.getFullYear();

    let ultimoCumple = new Date(fechaActual.getFullYear(), mes - 1, dia);
    if (fechaActual < ultimoCumple) {
      resultado--;
    }
    break;
  } else {
    alert("Introduce un número válido : ");
  }
}

alert(`Hola Edu tienes ${resultado} años `);
