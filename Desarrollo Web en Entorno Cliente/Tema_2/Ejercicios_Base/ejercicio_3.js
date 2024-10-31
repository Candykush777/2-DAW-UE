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
let filas = 8;
let columnas = 4;
let resultado = "";

for (let i = 0; i < filas; i++) {
  for (let j = 0; j < columnas; j++) {
    resultado += "# ";
  }

  resultado += "\n";
}
console.log(resultado);
