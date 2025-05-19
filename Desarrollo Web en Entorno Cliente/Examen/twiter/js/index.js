let divCard = document.querySelector("#card");

let contador = document.querySelector("#contador");

let input= document.querySelector("#input");

let boton = document.querySelector("#button");

boton.addEventListener("click", publicar);

input.addEventListener("input",actualizarContador)

function publicar() {
  let mensaje = input.value.trim();

  if (mensaje === "") {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "No puedes dejar el tweet vacio",
    });

    return;
  }

  let card = document.createElement("div");
  card.classList.add("p-1", "card", "mb-3");

  let bodyCard = document.createElement("div");
  bodyCard.classList.add("p-1","card-body");
  bodyCard.textContent = mensaje;

  
  card.appendChild(bodyCard);

  divCard.appendChild(card);


  input.value = "";

  actualizarContador();
}

function actualizarContador() {
  contador.textContent = `${input.value.length}/255`;
}
