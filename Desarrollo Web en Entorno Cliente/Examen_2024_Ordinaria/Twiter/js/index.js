let divCard = document.querySelector("#card");

let boton = document.querySelector("#button");

let input = document.querySelector("#input");

let contador = document.querySelector("#contador");

boton.addEventListener("click", publicar);
input.addEventListener("input", actualizarContador);

function publicar() {
  let mensaje = input.value.trim();

  if (mensaje== "") {
    Swal.fire({
      icon: "warning",
      title: "Mensaje vacío",
      text: "Por favor escribe algo antes de publicar.",
    });
    return;
  }

  let card = document.createElement("div");

  card.classList.add("card", "mb-3", "p-1");

  let bodyCard = document.createElement("div");

  bodyCard.classList.add("card-body");
  bodyCard.textContent=mensaje;

  card.appendChild(bodyCard);
  divCard.appendChild(card);

   input.value = "";
  contador.textContent = "0 / 250";

actualizarContador();
}

function actualizarContador() {

    contador.textContent=`${input.value.length} / 250`;
    
}
