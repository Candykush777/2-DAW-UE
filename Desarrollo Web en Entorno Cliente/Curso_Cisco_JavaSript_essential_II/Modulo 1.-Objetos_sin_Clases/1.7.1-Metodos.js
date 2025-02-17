let circle = {
  radius: 100,
  center: {
    x: 0,
    y: 0,
  },
  getType: function () {
    return "circle";
  },
};

let circle2 = {
  radius: 100,
  center: {
    x: 0,
    y: 0,
  },
  getType() {
    return "circle2"; //eta manera es más legible
  },
};

console.log(circle.getType());
console.log(circle["getType"]()); //es lo mismo pero se entiede mejor el 1º

console.log("------------------");
