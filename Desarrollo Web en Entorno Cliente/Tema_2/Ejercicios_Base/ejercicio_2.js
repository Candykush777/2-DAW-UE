/* 2. 

FizzBuzz (pregunta recurrente en entrevistas de js)

Escribe un programa que use console.log para imprimir todos los números de 1 a 100,
con dos excepciones:

- Para números divisibles por 3, imprime "Fizz" en lugar del número

- Para los números divisibles por 5 (y no 3), imprime "Buzz" en su lugar.

Cuando tengas eso funcionando, modifica tu programa para imprimir " FizzBuzz",
para números que sean divisibles entre 3 y 5 (y aún imprimir "Fizz" o "Buzz" para
números divisibles por solo uno de ellos) */

let number = 100;

for (let i = 1; i <= number; i++) {
  if (i % 3 == 0 && i % 5 == 0) {
    console.log("FizzBuzz");
  } else if (i % 5 == 0) {
    console.log("Buzz");
  } else if(i % 3 ==0){

    console.log("Fizz");
    
  }

  console.log(i);
  
}
