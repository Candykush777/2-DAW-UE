class Tweet {
  constructor(titulo, tematica, categoria) {
    this.titulo = titulo;
    this.tematica = tematica;
    this.categoria = categoria;
  }
}
let inputTitulo = document.querySelector("#titulo");
let inputTematica = document.querySelector("#tematica");
let formulario = document.querySelector("#form");
let selectCategoria = document.querySelector("#categoria");
let filtrarTweets = document.querySelector("#filtrarCategoria");
let timeLine = document.querySelector("#timeline");
let btnPublicar = document.querySelector("#btn");

let tweets = [];

btnPublicar.addEventListener("click", () => {
  let titulo = inputTitulo.value.trim();
  let tematica = inputTematica.value.trim();
  let categoria = selectCategoria.value;

  if (titulo === "" || tematica === "" || categoria === "Elige una categoria") {
    swal.fire({
      title: "Introduce un texto válido",
      text: "Debe introducir palabras",
      icon: "warning",
    });
    return;
  }

  let tweet = new Tweet(titulo, tematica, categoria);

  tweets.push(tweet);

  //tenemos que crear el timeline sino de poco sirve todo

  crearTweettimeline(tweet);

  formulario.reset();
});

function crearTweettimeline(tweet) {
  let card = document.createElement("div");
  card.classList.add("card");

  let cardBody = document.createElement("div");
  cardBody.classList.add("card-body");

  let cardTitle = document.createElement("h5");
  cardTitle.classList.add("card-title", "mb-2");
  cardTitle.textContent = tweet.titulo;

  let cardSubtitle = document.createElement("h6");
  cardSubtitle.classList.add("card-subtitle", "mb-2");
  cardSubtitle.textContent = tweet.tematica;

  let cardCategoria = document.createElement("h6");
  cardCategoria.classList.add("card-subtitle", "mb-2", "text-muted");
  cardCategoria.textContent = tweet.categoria; //ten cuidado que has puesto cardSubtitle otra vez y no cardcategoria

  let cardTextArea = document.createElement("textarea"); //error en text-area es sin guion
  cardTextArea.classList.add("form-control", "mb-2");
  cardTextArea.placeholder = "Escribe aquí tu tweet...";

  //creamos boton guardar

  let btnGuardar = document.createElement("button"); // aqui tenia el erro de poner queryselector estar atento
  btnGuardar.classList.add("btn", "btn-success");
  btnGuardar.textContent = "Guardar";

  //añadimos todo a las card

  cardBody.appendChild(cardTitle);
  cardBody.appendChild(cardSubtitle);
  cardBody.appendChild(cardCategoria);
  cardBody.appendChild(cardTextArea);
  //me faltaba añadir el boton guardar
  cardBody.appendChild(btnGuardar);

  card.appendChild(cardBody);

  //añadimos el contenido a X

  timeLine.appendChild(card);

  btnGuardar.addEventListener("click", () => {
    let contenido = cardTextArea.value.trim();

    if (!contenido) {
      swal.fire({
        title: "Introduce un texto válido",
        text: "Debe introducir palabras",
        icon: "warning",
      });
      return;
    }

    cardTextArea.remove();
    btnGuardar.remove();

    //añadimos el contenido
    let cardText = document.createElement("p");
    cardText.classList.add("card-text");
    cardText.textContent = contenido;

    //añadimos el contador

    let contador = document.createElement("p");
    contador.classList.add("text-muted");
    contador.innerHTML = `<b>${contenido.length} caracteres<b>`; //escribe bien length no ht

    cardBody.appendChild(cardText);
    cardBody.appendChild(contador);
  });
}

function filtradoDeTweet() {
  let aplicarFiltro = filtrarTweets.value;
  let filtrarTweet;

  if (aplicarFiltro !== "Elige una categoria") {
    filtrarTweet = tweets.filter((tweet) => tweet.categoria === aplicarFiltro);

    timeLine.innerHTML = "";

    filtrarTweet.forEach((tweet) => {
      crearTweettimeline(tweet);
    });
  } else {
    timeLine.innerHTML = "";

    tweets.forEach((tweet) => {
      crearTweettimeline(tweet);
    });
  }
}

filtrarTweets.addEventListener("change", filtradoDeTweet);
