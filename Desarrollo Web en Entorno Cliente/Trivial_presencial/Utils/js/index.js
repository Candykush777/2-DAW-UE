let divContainer = document.querySelector("#tapete");

let preguntas = [];

let puntosJugador1 = 0;

let uRl =
  "https://opentdb.com/api.php?amount=10&difficulty=medium&type=multiple";

  // Creamos el  audio para respuesta correcta e incorrecta

let correctSound = new Audio('correct1.wav');
let incorrectSound = new Audio('incorrect1.wav');
let winnerFinalSound = new Audio('winnerFinal.ogg');

async function cargarTrivial() {
  try {
    let response = await fetch(uRl);

    let json = await response.json();

    preguntas = json.results;

    console.log(preguntas);

    Swal.fire({
      title: "Cargando datos....",
      text: "Respuesta correcta de la API",
      icon: "success",
    });
    // Añadimos el div de puntos una vez fuera del ciclo sino me borra los puntos al estar dentro de la li

    setTimeout(() => {
      let divPuntos = document.createElement("div");
      divPuntos.classList.add("puntos");
      divPuntos.innerHTML = `<h3>Jugador 1: <span id="puntosJugador1">${puntosJugador1}</span> Puntos</h3>`;
      divContainer.prepend(divPuntos);
      /* append pone los puntos al final del DOM , 
     con prepend conseguimos que aparezca al principio, creo queda mejor
   */
    }, 5000);

    /*  preguntas.forEach((tarjetas) => {
      pintarCard(tarjetas);
    }); */
    setTimeout(() => {
      let numPreguntas = preguntas.length;//para detectar la ultima y poner el sonido final winner
      for (let i = 0; i < numPreguntas; i++) {
        setTimeout(() => {
          limpiarPreguntas(); 
          pintarCard(preguntas[i]);

          // Si es la última pregunta, reproducir sonido final
          if (i === numPreguntas - 1) {
            setTimeout(() => {
              winnerFinalSound.play(); 
              /* Swal.fire({ lo he quitado xq prefiero mostrar el div de lospuntos que un sweetalert
                title: "¡Juego terminado!",
                text: `Tu puntuación final es ${puntosJugador1} puntos.`,
                icon: "info",
              }); */
            }, 1000); // Retraso para escuchar el sonido y luego mostrar el resultado final
          }
        }, i * 10000); // Muestra una tarjeta cada 10 segundos
      }
    }, 5000); // Retraso de 5 segundos para la primera tarjeta y asi salga perfecto el sonido
  } catch (error) {
    console.error("Error al cargar los datos", error);
    Swal.fire({
      title: "Error",
      text: "Hubo un error al cargar los datos.",
      icon: "error",
    });
  }
}

function pintarCard(tarjetas) {
  let columna = document.createElement("div");
  columna.classList.add(
    "col-12",
    "mb-4",
    "animate__animated",
    "animate__fadeInDown"
  );

  let card = document.createElement("div");
  card.classList.add("card", "shadow");

  let cardBody = document.createElement("div");
  cardBody.classList.add("card-body");

  let categoria = document.createElement("h3");
  categoria.classList.add(
    "card-text",
    "text-center",
    "custom-font",
    "text-success"
  );
  categoria.innerHTML = ` ${tarjetas.category}`;

  let pregunta = document.createElement("h5");
  pregunta.classList.add("card-text", "text-center", "mb-4");
  pregunta.innerHTML = `<b>Pregunta:</b>: ${tarjetas.question}`;

  //vamos a usar _.shuffle() de Underscore

  let listaRespuestas = document.createElement("ul");
  listaRespuestas.classList.add("list-group", "list-group-flush");

  let respuestas = tarjetas.incorrect_answers.concat(tarjetas.correct_answer);
  respuestas = _.shuffle(respuestas);

  /* divContainer.innerHTML = ""; */

  //Creamos el div contenedor para los puntos

  respuestas.forEach((respuesta) => {
    let liRespuesta = document.createElement("li");
    liRespuesta.classList.add("list-group-item", "text-center");

    liRespuesta.innerText = respuesta;
    liRespuesta.style.borderRadius = "10px";
    /* El border-radius no funcionaba en css, solo me ha hehco caso poniendolo aquí, 
  las respuestas 1 y 4 en la parte exterior no hacia le border radius */

    // Respuestas correctas e incorrectas
    liRespuesta.addEventListener("click", () => {
      if (respuesta === tarjetas.correct_answer) {
        Swal.fire({
          title: "¡Correcto!",
          text: "Has seleccionado la respuesta correcta, sumas 10 punto.",
          icon: "success",
        });
        correctSound.play();

        puntosJugador1 += 10;
        actualizarPuntos();
      } else {
        Swal.fire({
          title: "Incorrecto",
          text: "Esa no es la respuesta correcta.",
          icon: "error",
        });
        incorrectSound.play();
      }
      listaRespuestas.innerHTML = "";
    });

    listaRespuestas.append(liRespuesta);
  });

  cardBody.append(categoria);
  cardBody.append(pregunta);
  cardBody.append(listaRespuestas);

  card.append(cardBody);

  columna.append(card);

  divContainer.append(columna);
}
//Actualizamos los puntos

function actualizarPuntos() {
  let puntuacionJugador1 = document.getElementById("puntosJugador1");

  puntuacionJugador1.innerText = puntosJugador1;
}

function limpiarPreguntas() {
  // Limpiar solo las tarjetas de preguntas
  let tarjetas = divContainer.querySelectorAll(".card");
  tarjetas.forEach((tarjeta) => tarjeta.remove());
}

cargarTrivial();
