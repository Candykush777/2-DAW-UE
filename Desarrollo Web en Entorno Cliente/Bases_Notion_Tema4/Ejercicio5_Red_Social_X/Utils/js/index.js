class Tweet {
  constructor(titulo, mensaje, categoria) {
    this.titulo = titulo;
    this.mensaje = mensaje;
    this.categoria = categoria;
  }
}

let inputTitulo = document.querySelector("#titulo");
let inputTematica = document.querySelector("#tematica");
let btnPublicar = document.querySelector("#btn");
let timeLine = document.querySelector("#timeline");
let formulario = document.querySelector("#form");
let selectCategoria = document.querySelector("#categoria");
let filtroCategoria = document.querySelector("#filtrarCategoria");

let tweets = [];

btnPublicar.addEventListener("click", () => {
  let titulo = inputTitulo.value.trim();
  let tematica = inputTematica.value.trim();
  let categoria = selectCategoria.value;

  if (
    titulo.length === 0 ||
    tematica.length === 0 ||
    categoria === "Elige una categoria"
  ) {
    swal.fire({
      title: "Introduce un texto válido",
      text: "Debe introducir palabras",
      icon: "warning",
    });
    return;
  }

  let tweet = new Tweet(titulo, tematica, categoria);

  tweets.push(tweet);

  crearTweettimeLine(tweet); // Agregar el nuevo tweet al timeline

  //limpiamos el formlario para nuevos tweets

  formulario.reset();
});

function crearTweettimeLine(tweet) {

  let card = document.createElement("div");
  card.classList.add("card");

  let cardBody = document.createElement("div");
  cardBody.classList.add("card-body");

  let cardTitle = document.createElement("h5");
  cardTitle.classList.add("card-title");
  cardTitle.textContent = tweet.titulo;

  let cardSubtitle = document.createElement("h6");
  cardSubtitle.classList.add("card-subtitle", "mb-2", "text-muted");
  cardSubtitle.textContent = tweet.tematica;

  let textArea = document.createElement("textarea");
  textArea.classList.add("form-control", "mb-2");
  textArea.placeholder = "Escribe tu contenido aquí...";

  let cardCategoria = document.createElement("h5");
  cardCategoria.classList.add("card-subtitle", "mb-2");
  cardCategoria.textContent = tweet.categoria; //repasar esto, esta bien ok

  //boton guardar

  let btnGuardar = document.createElement("button");
  btnGuardar.classList.add("btn", "btn-success", "btn-guardar"); //"btn-guardar" por si tenemso que añadir estilos personales en css
  btnGuardar.textContent = "Guardar";

  //construimos la card incluyendo el parrafo escrito por el usuario del contenido
  cardBody.appendChild(cardTitle);
  cardBody.appendChild(cardSubtitle);
  cardBody.appendChild(textArea);
  cardBody.appendChild(btnGuardar);
  cardBody.appendChild(cardCategoria);

  card.appendChild(cardBody);

  //se agrega al time de X

  timeLine.appendChild(card);

  btnGuardar.addEventListener("click", () => {
    let contenido = textArea.value.trim();

    if (!contenido) {
      swal.fire({
        title: "Introduce un contenido",
        text: "Debe introducir palabras",
        icon: "warning",
      });
      return;
    }

    textArea.remove();
    btnGuardar.remove();

    //creamos el contenido del tweet y el contador de caracteres

    let cardText = document.createElement("p");
    cardText.classList.add("card-text");
    cardText.textContent = contenido;

    //creamos el contador de caracteres

    let contador = document.createElement("p");
        contador.classList.add("text-muted"); //para que solo se vea al final el numero de letras en el tweet
    contador.innerHTML = `<b>${contenido.length} caracteres</b>`;

    cardBody.appendChild(cardText);
    cardBody.appendChild(contador);

    //limpiamos el formulario para mas entradas en el timeline

    /* formulario.reset(); */
  });
}

function aplicarFiltro() {
  let filtro = filtroCategoria.value;

  console.log("Filtro seleccionado: ", filtro); // Añadimos este log para depurar


  let tweetsFiltrados;

  if (filtro !== "Elige una categoria") {
    tweetsFiltrados = tweets.filter((tweet) => tweet.categoria === filtro);

    // limpiamos el timeline y agregamos el filtro con los tweets filtrados

    timeLine.innerHTML = "";

    tweetsFiltrados.forEach((tweet) => {
      crearTweettimeLine(tweet);
    });
  }else{
      //sino hay filtro mostramos todos los tweets
    timeLine.innerHTML = "";
    tweets.forEach((tweet) => {
      crearTweettimeLine(tweet);
    });
  
  }
}
// Añadir evento para el filtro
filtroCategoria.addEventListener("change", aplicarFiltro);
