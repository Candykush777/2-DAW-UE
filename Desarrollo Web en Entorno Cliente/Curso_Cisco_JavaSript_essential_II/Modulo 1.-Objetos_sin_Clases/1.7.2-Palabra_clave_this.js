let circle3 = {
  //esto tiene un error y nunca se debe usar
  radius: 100,
  center: {
    x: 0,
    y: 0,
  },
  getType() {
    return typeof circle3.radius === "number" ? "circle" : "unknown";
  },
};
console.log(circle3.getType());

console.log("----------------");

let figure = { ...circle3 };
delete circle3.radius;
console.log(figure.radius);
console.log(figure.getType()); // "unknown"!

let circle5 = {
  radius: 100,
  center: {
    x: 0,
    y: 0,
  },
  getType() {
    return typeof this.radius === "number" ? "circle5" : "unknown";
  },
};
console.log(circle.getType());
let figure5 = { ...circle5 };
delete circle5.radius;
console.log(figure5.radius);
console.log(figure5.getType()); // "circle"

let add = function (a, b) {
  return a + b;
};

let add2 = (a, b) => a + b; //No debemos utilizar funciones de flecha para declarar métodos de objeto.
