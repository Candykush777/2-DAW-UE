let inputTitulo = document.querySelector("#titulo");
let inputTematica = document.querySelector("#tematica");
let btnPublicar = document.querySelector("#btn");
let timeLine = document.querySelector("#timeline");
let formulario = document.querySelector("form");

btnPublicar.addEventListener("click", () => {
  let titulo = inputTitulo.value.trim();
  let tematica = inputTematica.value.trim();

  if (titulo.length === 0 || tematica.length === 0) {
    swal.fire({
      title: "Introduce un texto válido",
      text: "Debe introducir palabras",
      icon: "warning",
    });
    return;
  }

  let card = document.createElement("div");
  card.classList.add("card");

  let cardBody = document.createElement("div");

  cardBody.classList.add("card-body");

  let cardTitle = document.createElement("h5");

  cardTitle.classList.add("card-title");

  cardTitle.textContent = titulo;

  let cardSubtitle = document.createElement("h6");

  cardSubtitle.classList.add("card-subtitle", "mb-2", "text-muted");

  cardSubtitle.textContent = tematica;

  let textArea = document.createElement("textarea");

  textArea.classList.add("form-control", "mb-2");

  textArea.placeholder = "Escribe tu contenido aquí...";

  let btnGuardar = document.createElement("button");

  btnGuardar.classList.add("btn", "btn-success", "btn-guardar");

  btnGuardar.textContent = "Guardar";

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

    let cardText = document.createElement("p");
    cardText.classList.add("card-text");
    cardText.textContent = contenido;

    //creamos el contador de caracteres

    let contador = document.createElement("p");
    contador.innerHTML = `<b>${contenido.length} caracteres</b>`;
    contador.classList.add("text-muted"); //para que solo se vea al final el numero de letras en el tweet

    cardBody.appendChild(cardText);
    cardBody.appendChild(contador)
  });

  //construimos la card incluyendo el parrafo escrito por el usuario del contenido
  cardBody.appendChild(cardTitle);
  cardBody.appendChild(cardSubtitle);
  cardBody.appendChild(textArea);
  cardBody.appendChild(btnGuardar);

  card.appendChild(cardBody);

  //se agrega al time de X

  timeLine.appendChild(card);

  //limpiamos el formulario para mas entradas en el timeline

  formulario.reset();
});
