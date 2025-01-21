let usuarios = [];

let carrito =[];

let precioTotal=0;

let divContainer = document.querySelector("#productos");

let btnAgregarCarrito = document.querySelector("#botonCarrito");

function cargarProductos() {
  fetch("https://fakestoreapi.com/products")
    .then((response) => response.json())
    .then((response1) => {
      usuarios = response1;
      console.log("respuesta correcta"); //esto me sirve por si hay problemas
      swal.fire({
        title: "Cargando datos....",
        text: "Respuesta correcta de la API",
        icon: "success",
      });

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
  let columna = document.createElement("div");
columna.classList.add("col-4", "mb-4"); 

let card = document.createElement("div");
card.classList.add("card", "shadow");  

let cardBody = document.createElement("div");
cardBody.classList.add("card-body");

let title = document.createElement("h5");
title.classList.add("card-title");  
title.innerHTML = `<b>Nombre producto:</b> ${usuario.title}`;

let price = document.createElement("p");
price.classList.add("card-text", "text-primary");  
price.innerHTML = `<b>Precio: </b> ${usuario.price}`;

let descripcion = document.createElement("p");
descripcion.classList.add("card-text", "text-muted");
descripcion.innerHTML = `<b>Descripción: </b> ${usuario.description}`;

let btnAgregarCarrito = document.createElement("button");
btnAgregarCarrito.classList.add("btn", "btn-success", "btn-agregar", "mt-2"); 
btnAgregarCarrito.textContent = "Agregar al Carrito";

  cardBody.appendChild(title);
  cardBody.appendChild(price);
  cardBody.appendChild(descripcion);
  cardBody.appendChild(btnAgregarCarrito);
  card.appendChild(cardBody);
  columna.appendChild(card);

  divContainer.appendChild(columna);

  btnAgregarCarrito.addEventListener("click",(e)=>{





  } )
}

function agregarAlCarrito(usuario) {

  carrito.push(usuario);

precioTotal += usuario.price;

document.getElementById("precioTotal").textContent=`$${precioTotal.toFixed(2)}`

//mostrar elproducto en el carrito 
  
}



//esto deberia ir despues de todo fuera de todo ¡¡
cargarProductos();



