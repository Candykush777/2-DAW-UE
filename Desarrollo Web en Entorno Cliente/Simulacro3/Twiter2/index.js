let input = document.querySelector("#input");
let contador = document.querySelector("#contador");
let button = document.querySelector("#button");
let divCard = document.querySelector("#card");


button.addEventListener("click",publicar)
input.addEventListener("input",actualizarContador)

function publicar() {
  let mensaje = input.value.trim();

  if (mensaje === "") {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Tienes que rellenar el mensaje ",
    });
    return;
  }

  let card = document.createElement("div");
  card.classList.add("card", "p-3", "mb-3");

  let bodyCard = document.createElement("div");
  bodyCard.classList.add("card-body", "p-1");
  bodyCard.textContent = mensaje;

  let button = document.createElement("button");
  button.classList.add("btn", "btn-danger","w-50");
  button.textContent = "Eliminar";

  button.addEventListener("click", () => card.remove());

  card.appendChild(bodyCard);
  card.appendChild(button);
  divCard.appendChild(card);

  input.value = "";

  actualizarContador();
}

function actualizarContador() {
  contador.textContent = `${input.value.length}/255`;
}
