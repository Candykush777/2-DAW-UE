/* 3. 
Crea un array con los siguientes valores:
```javascript

const ages = [19, 22, 19, 24, 20, 25, 26, 24, 25, 24]
```
Una vez tengas introducidos todos los valores realiza las siguientes tareas:

- Ordena el array y obten el valor máximo y mínimo
- Obtén la medida de edad */

const ages = [19, 22, 19, 24, 20, 25, 26, 24, 25, 24];


// ordenar array 

ages.sort((a,b) => a - b );

console.log(ages);

//Valor minimo y maximo, dos maneras diferentes 

let min=ages[0];

let max = ages[ages.length -1];

console.log(`El valor maximo es : ${max}, y el valor minimo es : ${min}`);

let maximo = Math.max(...ages);

let minimo = Math.min(...ages);

console.log(`El valor maximo es : ${maximo}, y el valor minimo es : ${minimo}`);

//La media de edad

let suma=0;

let media;

for (let i = 0; i < ages.length; i++) {
    suma += ages[i];
    
}
media =suma/ages.length;

console.log(`La media de edad se situa en : ${media}`);





