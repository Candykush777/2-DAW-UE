/* 3. Tablero de ajedrez

Escribe un programa que cree un string que represente un tabledo de 8 × 8, usando
caracteres de nueva línea para separar las líneas. En cada posición del tabledo hay
un espacio o un carácter "#". Los caracteres deberían de formar un tablero de
ajedrez.

```
# # # #
# # # #
# # # #
# # # #
# # # #
# # # #
# # # #
# # # #
``` */

//Usando repeat

let fila = 8;
let columna = 4;
let linea = "# ".repeat(columna) + "\n";
let resultado = linea.repeat(fila);
console.log(resultado);

