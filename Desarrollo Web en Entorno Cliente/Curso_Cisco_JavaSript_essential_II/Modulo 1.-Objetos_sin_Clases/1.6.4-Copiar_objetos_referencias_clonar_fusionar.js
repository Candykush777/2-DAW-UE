/* let point0 = {x:10, y: 20 };
let point1 = point0;    // copy reference
let point2 = {};
Object.assign(point2, point0);  //  copy properties into the new object
console.log(point2.x);
console.log(point2.y);
console.log(point1 === point0); // true
console.log(point1 === point2); // false

let point3 = {};
Object.assign(point3, point0, {z: 100});
console.log(point3.z);
console.log(point3.y);
var point4 = {};
Object.assign(point4, point3, {z: 200, color: "red"});
console.log(point4.z);  */ // 200
/* 
let point0 = {x:10, y: 20 };
let point2 = Object.assign({}, point0);
let point3 = Object.assign({}, point0, {z: 100});

console.log(point0);
console.log(point2);
console.log(point3); */

let point0 = { x: 10, y: 20 }; //operador propagacion en castellano , spread operator
let point2 = { ...point0 };
let point3 = { ...point0, z: 100 };
console.log(point0);
console.log(point2);
console.log(point3);
/* 
let point4 = { ...point3, ...{z: 200, color: "red"};  es lo mismo que lo de abajo
 */
let point4 = { ...point3, z: 200, color: "red" };

console.log("----------------");

let circle1 = {
  radius: 100,
  center: {
    x: 100,
    y: 100,
  },
};
let circle2 = { ...circle1 };
circle1.radius = 200;
circle1.center.x = 200;
console.log(circle2.radius); // 100 porque se copio antes
console.log(circle2.center.x); // 200 no sé xq
console.log(circle1 === circle2); // false
/* console.log(circle1.center === center); */ // true !, es error xq center no esta definido, deberias er...
console.log(circle1.center === circle2.center); // true (comparten el mismo objeto interno)

//copia profunda
let circle22 = structuredClone(circle1); //mas moderno de loq ue vamos a ver ahora
console.log(circle22);

console.log("----------------------------"); //pirada total
let deepClone = function (obj) {
  let newObj = { ...obj };
  for (property in newObj) {
    if (typeof newObj[property] === "object") {
      newObj[property] = deepClone(newObj[property]);
    }
  }
  return newObj;
};

let original = {
  a: 1,
  b: {
    c: 2,
    d: {
      e: 3,
    },
  },
};

let clone = deepClone(original);

original.b.c = 77;
original.b.d.e = 99;

// Verificamos que el clon sigue intacto, xq hemos cambiado el original no el clon...
console.log(clone.b.c); // 2 (correcto)
console.log(clone.b.d.e); // 3 (correcto)

console.log(original.b.c); // 42  (cambió en original)
console.log(original.b.d.e); // 99 (cambió en original)
