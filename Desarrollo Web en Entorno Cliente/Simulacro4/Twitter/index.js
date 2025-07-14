let input = document.querySelector("#input");

let contador = document.querySelector("#contador");

let button = document.querySelector("#button");

let divCard = document.querySelector("#card");

input.addEventListener("input", actualizarContador);
button.addEventListener("click", publicar);

function publicar() {
  let mensaje = input.value.trim();

  if (mensaje === "") {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Tienes que introducir un mensaje",
    });
    return;
  }

  let card = document.createElement("div");
  card.classList.add("card", "p-1");

  let cardBody = document.createElement("div");
  cardBody.classList.add("card-body", "p-1");
  cardBody.textContent = mensaje;

  let button = document.createElement("button");
  button.classList.add("button", "btn", "btn-danger", "text-center", "w-50");
  button.textContent = "Eliminar";

  button.addEventListener("click", () => card.remove());

  card.appendChild(cardBody);

  card.appendChild(button);

  divCard.appendChild(card);

  input.value = "";

  actualizarContador();
}

function actualizarContador() {
  contador.textContent = `${input.value.length}/255`;
}
