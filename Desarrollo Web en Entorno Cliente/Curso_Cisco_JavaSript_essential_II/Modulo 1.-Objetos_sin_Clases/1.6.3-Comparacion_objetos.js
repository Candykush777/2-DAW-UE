var point1 = { x: 10, y: 20 };
var point2 = { x: 10, y: 20 };
console.log(point1 === point2); // false

let point3 = point1;
console.log(point1 === point3); // true

point3.z = 40;
console.log(point3.z); // 40
console.log(point1.z); // 40
console.log(point2.z); // undefined
