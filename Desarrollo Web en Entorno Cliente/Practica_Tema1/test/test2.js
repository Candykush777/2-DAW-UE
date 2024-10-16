// Ejemplo de test utilizando la librería should

// Cargar la librería should

var should = require("should");
// Cargar el módulo con las funciones para testear

var operaciones = require("../operations.js");

// Test

it("comprobar funcion resta", function () {
  operaciones.resta.should.be.a.Function();

  should.equal(operaciones.resta(6, 3), 3);
  should.equal(operaciones.resta(6, -3), 9);
  should.equal(operaciones.resta(3, 7), -4);
});

it("comprobar función multiplicación", function () {
  operaciones.multiplicacion.should.be.a.Function();

  should.equal(operaciones.multiplicacion(3, 3), 9);
  should.equal(operaciones.multiplicacion(3, 5), 15);
  should.equal(operaciones.multiplicacion(3, -3), -9);
});
