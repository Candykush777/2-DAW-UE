let preguntas = [];

let preguntaActual=0;

let divContainer = document.querySelector("#tapete");

//vamos  a utilizar async para el fetch

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

    //aqui iria pintar card

    pintarCard(preguntaActual);
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
  columna.classList.add = ("col-4", "mb-4");

  let card = document.createElement("div");
  card.classList.add("card", "shadow");

  let cardBody = document.createElement("div");
  cardBody.classList.add("card-body");

  let title = document.createElement("h5");
  title.classList.add("text-center", "text-primary", "fw-bold", "shadow-sm");
  title.innerHTML = `Tipo: ${tarjetas.type}`;

  let dificultad = document.createElement("p");
  dificultad.classList.add("card-text");
  dificultad.innerHTML = `<b>Dificultad:</b> ${tarjetas.difficulty}`;

  let categoria = document.createElement("p");
  categoria.classList.add("card-text");
  categoria.innerHTML = `<b>Categoria: </b> ${tarjetas.category}`;

  let pregunta = document.createElement("p");
  pregunta.classList.add("card-text");
  pregunta.innerHTML = `<b>Pregnuta: </b>: ${tarjetas.question}`;

 /*  let correcta = document.createElement("p");
  correcta.classList.add("card-text");
  correcta.innerHTML = `<b>Pregunta Correcta</b>: ${tarjetas.correct_answer}`;

  let incorrecta = document.createElement("p");
  incorrecta.classList.add("card-text");
  incorrecta.innerHTML = `<b>Respuestas Incorrectas</b>: ${tarjetas.incorrect_answers}`;
 */
  cardBody.appendChild(title);
  cardBody.appendChild(dificultad);
  cardBody.appendChild(categoria);
  cardBody.appendChild(pregunta);


let respuestas=[pregunta.correct_answer];
respuestas = respuestas.sort(()=> Math.random()- 0.5)//mirar esto bien


//botones para las respuestas 

respuestas.forEach((respuesta)=>{

    let button =document.createElement("button");
    button.classList.add("btn", "btn-primary", "m-2");
    button.innerHTML=respuesta;

// el evento

button.addEventListener("click", (e)=>{

    if (respuesta ===pregunta.correct_answer) {
        Swal.fire({
            title: "¡Correcto!",
            text: "Has respondido correctamente.",
            icon: "success",
          });

          setTimeout(() => {
            siguientePregunta();
            
          }, 4000);
        
    }
});
cardBody.appendChild(button);





})




 /*  cardBody.appendChild(correcta);
  cardBody.appendChild(incorrecta); */

  card.appendChild(cardBody);

  columna.appendChild(card);

  divContainer.appendChild(columna);
}


function siguientePregunta() {
    

    if (preguntaActual < preguntas.length -1) {
        preguntaActual++;
        pintarCard(preguntaActual);
        
    }else{
        cargarTrivial();
    }
    
}









cargarTrivial();
