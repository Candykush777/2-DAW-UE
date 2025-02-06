let preguntas = [];
let preguntaActual = 0;
let divContainer = document.querySelector("#tapete");

// Vamos a utilizar async para el fetch
let uRl = "https://opentdb.com/api.php?amount=5&type=multiple";

async function cargarTrivial() {
  try {
    let response = await fetch(uRl);
    let json = await response.json();

    preguntas = json.results;

    console.log("Respuesta correcta");

    Swal.fire({
      title: "Cargando datos....",
      text: "Respuesta correcta de la API",
      icon: "success",
    });

    // Aquí iría pintarCard
    pintarCard(preguntas[preguntaActual]);
  } catch (error) {
    console.error("Error al cargar los datos", error);
    Swal.fire({
      title: "Error",
      text: "Hubo un error al cargar los datos.",
      icon: "error",
    });
  }
}

function pintarCard(tarjeta) {
  // Limpiar el contenedor antes de pintar una nueva tarjeta
  divContainer.innerHTML = "";

  let columna = document.createElement("div");
  columna.classList.add("col-4", "mb-4");

  let card = document.createElement("div");
  card.classList.add("card", "shadow");

  let cardBody = document.createElement("div");
  cardBody.classList.add("card-body");

  let title = document.createElement("h5");
  title.classList.add("text-center", "text-primary", "fw-bold", "shadow-sm");
  title.innerHTML = `Tipo: ${tarjeta.type}`;

  let dificultad = document.createElement("p");
  dificultad.classList.add("card-text");
  dificultad.innerHTML = `<b>Dificultad:</b> ${tarjeta.difficulty}`;

  let categoria = document.createElement("p");
  categoria.classList.add("card-text");
  categoria.innerHTML = `<b>Categoria: </b> ${tarjeta.category}`;

  let pregunta = document.createElement("p");
  pregunta.classList.add("card-text");
  pregunta.innerHTML = `<b>Pregunta: </b> ${tarjeta.question}`;

  cardBody.appendChild(title);
  cardBody.appendChild(dificultad);
  cardBody.appendChild(categoria);
  cardBody.appendChild(pregunta);

  // Mezclar respuestas correctas e incorrectas
  let respuestas = tarjeta.incorrect_answers.concat(tarjeta.correct_answer);
  respuestas = respuestas.sort(() => Math.random() - 0.5);

  // Botones para las respuestas
  respuestas.forEach((respuesta) => {
    let button = document.createElement("button");
    button.classList.add("btn", "btn-primary", "m-2");
    button.innerHTML = respuesta;

    // Evento para los botones
    button.addEventListener("click", () => {
      if (respuesta === tarjeta.correct_answer) {
        Swal.fire({
          title: "¡Correcto!",
          text: "Has respondido correctamente.",
          icon: "success",
        });

        setTimeout(() => {
          siguientePregunta();
        }, 4000);
      } else {
        Swal.fire({
          title: "Incorrecto",
          text: "Esa no es la respuesta correcta.",
          icon: "error",
        });
      }
    });

    cardBody.appendChild(button);
  });

  card.appendChild(cardBody);
  columna.appendChild(card);
  divContainer.appendChild(columna);
}

function siguientePregunta() {
  if (preguntaActual < preguntas.length - 1) {
    preguntaActual++;
    pintarCard(preguntas[preguntaActual]);
  } else {
    Swal.fire({
      title: "Fin del juego",
      text: "Has respondido todas las preguntas.",
      icon: "info",
    });
    // Reiniciar el juego o cargar nuevas preguntas
    preguntaActual = 0;
    cargarTrivial();
  }
}

cargarTrivial();

