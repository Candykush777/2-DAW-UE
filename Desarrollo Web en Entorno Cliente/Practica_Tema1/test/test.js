// Ejemplo de test utilizando el módulo assert disponible en NodeJS

// Cargar el módulo assert

var assert = require("assert");

// Cargar el módulo con las funciones para testear

var operaciones = require("../operations.js");

// Test

it("comprobar funcion sumar", function () {
  assert.equal(operaciones.suma(1, 5), 6);
  assert.equal(operaciones.suma(-1, 4), 3);
  assert.equal(operaciones.suma(1, -3), -2);
});

it("comprobar funcion dividir", function () {
  assert.equal(operaciones.division(4, 2), 2);
  assert.equal(operaciones.division(12, 2), 6);
  assert.equal(operaciones.division(10, -2), -5);
});
