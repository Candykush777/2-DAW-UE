let productos = [];

let filtroPrecio = document.querySelector("#filtroPrecio");
let filtroCategoria = document.querySelector("#filtroCategoria");
let divContainer = document.querySelector("#principal");
let buscarID =document.querySelector("#id");

let btnFiltrar=document.querySelector("#boton");
/* filtroPrecio.addEventListener("change", filtrado);
filtroCategoria.addEventListener("change", filtrado); */


 btnFiltrar.addEventListener("click",filtrado); 

let uRl = "https://dummyjson.com/products";

async function cargarProductos() {
  try {
    let respuesta = await fetch(uRl);
    let json = await respuesta.json();
    productos = json.products;

    console.log(`Respuesta correcta `, productos);

    Swal.fire({
      title: "Cargando datos....",
      text: "Respuesta correcta de la API",
      icon: "success",
    });

    //pintar la card

    productos.forEach((product) => pintarCard(product));
  } catch (error) {
    console.error("Error al cargar los datos", error);
    Swal.fire({
      title: "Error",
      text: "Hubo un error al cargar los datos.",
      icon: "error",
    });
  }
}



function pintarCard(product) {
  let columna = document.createElement("div");
  columna.classList.add(
    "col-3",
    "mb-3",
    "animate_animated",
    "animate__fadeInDown"
  );

  let card = document.createElement("div");
  card.classList.add("card", "shadow", "text-center");

  let imagen = document.createElement("img");
  imagen.classList.add("card-img-top" /* ,"w-50","mx-auto" */);
  imagen.src = product.thumbnail;

  let cardBody = document.createElement("div");
  cardBody.classList.add("card-body");

  let titulo = document.createElement("h4");
  titulo.classList.add("card-title", "text-center");
  titulo.textContent = product.title;

  let marca = document.createElement("p");
  marca.classList.add("card-text", "text-primary");
  marca.textContent = product.brand;

  let categoria = document.createElement("p");
  categoria.classList.add("card-text");
  categoria.textContent = `Categoria:${product.category}`;

  let price = document.createElement("h6");
  price.classList.add("card-text", "text-success");
  price.textContent = `Precio: ${product.price}`;

  columna.appendChild(card);
  card.appendChild(imagen);
  card.appendChild(cardBody);
  cardBody.appendChild(titulo);

  cardBody.appendChild(marca);
  cardBody.appendChild(categoria);
  cardBody.appendChild(price);

  divContainer.appendChild(columna);
}

function filtrado() {

   let filtrarP = filtroPrecio.value; 

  let filtrarC = filtroCategoria.value;

  let buscar=buscarID.value.trim();

  let productosFiltrados = productos;

if (filtrarC!== "todas"){


  productosFiltrados=productosFiltrados.filter((product)=>product.category=== filtrarC)
}


if (filtrarP === "1"){

  productosFiltrados=productosFiltrados.filter((product)=>product.price < 10)

}if (filtrarP === "2" ){

productosFiltrados=productosFiltrados.filter((product)=>product.price >10 && product.price <= 40)

}

if(filtrarP === "3"){

  productosFiltrados=productosFiltrados.filter((product)=>product.price > 40)


}

if (filtrarP === "4"){

productosFiltrados =productos;

}

if(buscar !== ""){

productosFiltrados=productosFiltrados.filter((product)=> product.id === Number(buscar) )
  
}



divContainer.innerHTML="";
productosFiltrados.forEach((product)=>pintarCard(product));
}


cargarProductos();

