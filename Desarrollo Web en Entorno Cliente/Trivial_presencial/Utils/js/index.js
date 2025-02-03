let divContainer = document.querySelector("#tapete");

let preguntas = [];


let dire="Trivial_presencial\index.html"

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

    console.log(`Respuesta correcta de la API ${preguntas}`);

      

   /*  Quitamos esto xq no es profesional que salga en publico la respuesta de la api 
   Swal.fire({
      title: "Cargando datos....",
      text: "Respuesta correcta de la API",
      icon: "success",
    }); */

    setTimeout(() => {
      // Mostrar la puntuación inicial después de 5 segundos
      let divPuntos = document.createElement("div");
      divPuntos.classList.add("puntos");
      divPuntos.innerHTML = `<h2><span id="puntosJugador1">${puntosJugador1}</span> Puntos</h2>`;
      divContainer.prepend(divPuntos);
    }, 5000);
    
    setTimeout(() => {
      let numPreguntas = preguntas.length;
      for (let i = 0; i < numPreguntas; i++) {
        setTimeout(() => {
          limpiarPreguntas();  
          pintarCard(preguntas[i]);  
    
          if (i === numPreguntas - 1) {
            setTimeout(() => {
              winnerFinalSound.play();  // Reproducir sonido de ganador cuando termine la última pregunta
              let puntosDinamicos = document.querySelector(".puntos");
              if (puntosDinamicos) {
                puntosDinamicos.remove();  // Eliminar puntos dinámicos
              }
             
              setTimeout(() => {
                limpiarPreguntas();  // Elimina todas las tarjetas
                mostrarPuntajeFinal();  // Muestra el puntaje final
              }, 1000); 
            }, 11000);  // Espera 11 segundos antes de reproducir el sonido final
          }
        }, i * 10000);  // Mostrar cada pregunta con un intervalo de 10 segundos
      }
    }, 5000);

  } catch (error) {
    console.error("Error al cargar los datos", error);
    Swal.fire({
      title: "Error",
      text: "Hubo un error al cargar los datos.",
      icon: "error",
    });
  }
}

// Función para pintar una tarjeta con la pregunta y respuestas
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
     "letra"
  );
  categoria.innerHTML = ` ${tarjetas.category}`;

  let pregunta = document.createElement("h5");
  pregunta.classList.add("card-text", "text-center", "mb-4", "pregunta");
  pregunta.innerHTML = `${tarjetas.question}`;

  // Creamos las respuestas
  let listaRespuestas = document.createElement("ul");
  listaRespuestas.classList.add("list-group", "list-group-flush");

  let respuestas = tarjetas.incorrect_answers.concat(tarjetas.correct_answer);
  respuestas = _.shuffle(respuestas);

  // Creamos las respuestas en la lista
  respuestas.forEach((respuesta) => {
    let liRespuesta = document.createElement("li");
    liRespuesta.classList.add("list-group-item", "text-center");

    liRespuesta.innerText = respuesta;
    liRespuesta.style.borderRadius = "10px";  // Aplica border-radius aquí, xq no era capaz, 
    // se quedaban la 1a y 4a por el borde externo sin radius

    // Respuestas correctas e incorrectas
    liRespuesta.addEventListener("click", () => {
      if (respuesta === tarjetas.correct_answer) {
        Swal.fire({
          title: "¡Correcto!",
          text: "Has seleccionado la respuesta correcta, sumas 10 puntos.",
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
      listaRespuestas.innerHTML = "";  // Limpiar las respuestas 
    });

    listaRespuestas.append(liRespuesta);
  });

  // Agregar todo a la tarjeta
  cardBody.append(categoria);
  cardBody.append(pregunta);
  cardBody.append(listaRespuestas);

  card.append(cardBody);
  columna.append(card);

  divContainer.append(columna);  // Agregar la columna con la nueva tarjeta
}


function limpiarPreguntas() {
  
  let tarjetas = divContainer.querySelectorAll(".col-12");  // Seleccionamos las columnas
  tarjetas.forEach((tarjeta) => {
    tarjeta.remove();  // Eliminamos la columna completa que contiene la card
  });
}


function actualizarPuntos() {
  let puntuacionJugador1 = document.getElementById("puntosJugador1");

  puntuacionJugador1.innerText = puntosJugador1;
}
function mostrarPuntajeFinal() {
  let divPuntosFinales = document.createElement("div");
  divPuntosFinales.classList.add("puntos-finales", "animate__animated", "animate__fadeInDown");
  divPuntosFinales.innerHTML = `
    <div class="puntaje-container">
      <h1><span id="puntosJugador1">${puntosJugador1}</span> Puntos Finales</h1>
    </div>
    <div class="volver-container">
      <a href="#" onclick="recargarPagina()">Volver a Jugar</a>
    </div>
  `;
  divContainer.prepend(divPuntosFinales);
}
function recargarPagina() {
  location.reload();  // Recarga la página actual
}
cargarTrivial();