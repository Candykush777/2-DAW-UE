/* 1. Piramide
Escriba un script que pedido por consola (prompt un número), represente por consola
la siguiente figura con el número de filas introducido en el prompt.En el caso de
no introducir un número o que sea menor que 0 saltará un aviso por consola y dará
la posibilidad de repetir el proceso:
```
Cuantas filas quieres que aparezca: 7
+
++
+++
++++
+++++
++++++
+++++++
``` */

let filas;

while (true) {
  let userInsert = prompt("cuantas filas quieres que aparezcan : ");

  filas = parseInt(userInsert, 10);

  if (!isNaN(filas) && filas > 0) {
    break;
  }else{
    alert("Introduce un número válido o mayor que 0 ")
  }
}

for (let i = 1; i <= filas; i++) {
    
    console.log("+".repeat(i));
    
    
}
