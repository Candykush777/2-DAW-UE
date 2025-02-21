let point = {x:0, y:0};
let coloredPoint = {color: "red"};

coloredPoint.__proto__ = point;

console.log(Object.getOwnPropertyNames(coloredPoint));
console.log(coloredPoint.color);
console.log(coloredPoint.x);

console.log(point);

console.log("--------------");


coloredPoint.x = 100;   // new property
console.log(coloredPoint.x);
console.log(point.x);
console.log(Object.getOwnPropertyNames(coloredPoint));

console.log("------------------");


point.y = 200;
console.log(coloredPoint.y);
console.log(point.y);

