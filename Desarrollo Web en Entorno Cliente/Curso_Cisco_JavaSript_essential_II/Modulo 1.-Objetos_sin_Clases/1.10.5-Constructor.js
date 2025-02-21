let Figure = function () {
  this.getType = function () {
    return this.type ? this.type : "unknown";
  };
};
let figure = new Figure();

let Circle = function (center, radius) {
  this.type = "circle";
  this.center = center;
  this.radius = radius;
};
Circle.prototype = figure;
let circle1 = new Circle({ x: 0, y: 0 }, 10);
let circle2 = new Circle({ x: 100, y: 100 }, 100);

let Triangle = function (v1, v2, v3) {
  this.type = "triangle";
  this.vertices = [v1, v2, v3];
};
Triangle.prototype = figure;
let triangle1 = new Triangle(
  { x: 0, y: 0 },
  { x: 50, y: 50 },
  { x: 10, y: 100 }
);
console.log(circle1.getType());
console.log(triangle1.getType());

Circle.prototype.hi = function () {
  console.log("Hi!");
};

circle1.hi();
triangle1.hi();
figure.hi();

console.log("-------------------");

let testString = new String("unu doi trei");
console.log(testString.length);

String.prototype.hi = function(){console.log("Hi!")};
/* console(string.hi()); */ //esto da error hay que llamar a testString
testString.hi();
console.log("abcd".hi());// es undefined xq no hay un return en la funcion 



