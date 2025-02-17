/* ¿Es correcto este comportamiento constante? Parece que sí, aunque puede que se requiera una explicación adicional.

Según la documentación de JavaScript, "una constante no puede cambiar mediante reasignación" y "una constante no puede volver a declararse" .

Esto se puede ver idealmente en el caso de tipos simples, como la declaración e inicialización de la constanteincógnitaEn nuestro ejemplo, el valor10Lo que se colocó allí no se puede cambiar, punto. Tampoco se puede volver a declarar una variable o una constante con el mismo nombre.incógnita.

En el caso de tipos complejos (es decir, matrices y objetos), las variables y constantes (lasvariedad,dejar,constanteLas palabras clave no contienen el objeto completo, sino solo la referencia al objeto. Para simplificar, podemos imaginar la referencia como una dirección que indica dónde se almacena realmente el objeto.

Entonces, elconstanteLa palabra clave protege únicamente la referencia, la dirección, contra cambios. No podemos cambiar la referencia, por ejemplo, reemplazando el objeto (el nuevo objeto tiene una dirección diferente). Sin embargo, los cambios dentro de un objeto (agregar una nueva propiedad, cambiar un valor, etc.) no afectan la referencia.

Intentemos entenderlo con un ejemplo aún más sencillo.

Supongamos que tenemos un documento con nuestra dirección de residencia escrita en él. Es solo una referencia; nuestra casa no está incluida físicamente en el documento. Si por alguna razón no podemos cambiar esta dirección (¿quizás hemos cometido un error?), entonces tenemos una situación con una declaración constante.

Las referencias o direcciones no se pueden cambiar, pero no afectan a lo que ocurre en el interior de la casa: podemos, por ejemplo, pintarla, reorganizarla por completo, derribar todas las paredes y convertirla en un solo espacio. La casa es nuestro objeto, cuyas propiedades podemos modificar libremente.

Simplemente no podemos cambiar las referencias, es decir, lasconstantedeclaración, que está escrita en nuestro misterioso documento.

En el caso de los objetos, const está diseñado para proteger contra una nueva declaración o asignación de un nuevo objeto.

Por supuesto, existen métodos para proteger los objetos, o más precisamente sus propiedades, de los cambios. */
