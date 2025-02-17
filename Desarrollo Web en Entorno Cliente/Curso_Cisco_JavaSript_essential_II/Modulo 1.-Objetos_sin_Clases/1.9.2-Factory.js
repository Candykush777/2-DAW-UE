let createPoint  = function(x, y) {
    let obj = {};
    obj.x = x;
    obj.y = y;
    return obj;
};
let point1 = createPoint(1,1);
let point2 = createPoint(2,2);
console.log(point1.x); // ->  1
console.log(point2.x); // -> 2  muy larga 

let createPoint2  = function(x, y) { // mas corta y mas clara
    return {
        x:x,
        y:y
    }
};

let createPoint3  = function(x, y) { //lo ideal
    return {
        x,
        y
    }
};

let createPoint4  = (x, y) => ({x, y}); // la más corta posible, funcion flecha

console.log("-----------------");
let createColoredPoint  = function(x, y, color) {
    let _info = "... object under construction";
    let _color = color;
    console.log(_info);
    return {
        x,
        y,
        getColor() {return _color}
    }
};
let coloredPoint1 = createColoredPoint (1, 1, "red");// -> ... object under construction
let coloredPoint2 = createColoredPoint (2, 2, "green");// -> ... object under construction 
console.log(coloredPoint1.getColor());    // -> red
console.log(coloredPoint2.getColor());    // -> green
console.log(coloredPoint1._color);   // -> undefined !!!




