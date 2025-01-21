let usuarios = [];
let divContainer = document.querySelector("#container");
let btnGuardar = document.querySelector("#btn");

//recibir el json

function cargarDatos() {
  fetch("https://jsonplaceholder.typicode.com/users")
    .then((response) => response.json())
    .then((response1) => {
      usuarios = response1;

      console.log("respuesta correcta");
      swal.fire({
        title: "Cargando datos....",
        text: "Respuesta correcta de la API",
        icon: "success",
      });

      //llamamos a pintarCard

      usuarios.forEach((usuario) => {
        pintarCard(usuario);
      });
    })
    .catch((error) => {
      console.error("Error al cargar los datos", error);
      swal.fire({
        title: "Error",
        text: "Hubo un error al cargar los datos.",
        icon: "error",
      });
    });
}

function pintarCard(usuario) {
  let cardColumna = document.createElement("div");
  cardColumna.className = "col-md-4";

  let card = document.createElement("div");
  card.className = "card";

  let cardBody = document.createElement("div");
  cardBody.className = "card-body";

  let nombre = document.createElement("p");
  nombre.className = "card-text";
  nombre.textContent = `Nombre: ${usuario.name}`;

  let email = document.createElement("p");
  email.className = "card-text";
  email.textContent = `Email: ${usuario.email}`;

  let direccion = document.createElement("p");
  direccion.className = "card-text";

  //sacamos los datos dle objeto addrees

  let address = `${usuario.address.city} `;
  direccion.innerText = `Ciudad: ${address}`;

  cardBody.appendChild(nombre);
  cardBody.appendChild(email);
  cardBody.appendChild(direccion);
  card.appendChild(cardBody);
  cardColumna.appendChild(card);

  divContainer.appendChild(cardColumna);
}

btnGuardar.addEventListener("click", () => {
  setTimeout(() => {
    swal.fire({
      title: "Cargando Datos...",
      icon: "success",
    });

    usuarios.forEach((usuario)=>{
      pintarCard(usuario);
    })
  }, 2000);
});

//cargamos mas datos con setimout, aunque se cargaran los mismos xq no hay mas

cargarDatos();
