/* Crea un simulador de una tienda online que obtiene información sobre productos de una API pública y permite a los usuarios agregar 
productos al carrito.

1. Usa la API pública [`https://fakestoreapi.com/products`](https://dummyjson.com/docs/products) para obtener una lista de productos.
2. Muestra los productos (nombre, precio y descripción) en una lista dentro del DOM dentro de cargas.
3. Permite al usuario agregar un producto al carrito haciendo clic en un botón "Agregar al carrito" para cada producto.
4. Simula un retraso de 2 segundos al agregar productos al carrito (usando `setTimeout`) y muestra un mensaje de "Producto agregado".
5. Agrega también la funcionalidad de que el usuario pueda eliminar un producto de la lista al pulsar algún botón
6. En la parte superior de los resultados, puedes poner un filtro de búsqueda, donde el usuario podrá seleccionar precio mínimo, precio 
máximo, categoría, etc… lo que hará que la lista de productos que se muestra se modifique
7. Muestra el total acumulado del carrito en tiempo real. */


const tapeteDiv=document.querySelector("#tapete")

const productos = [];

let precioTotal=0;

const uRL = "https://dummyjson.com/products";

async function cargarUrl() {
  try {
    let response = await fetch(uRL);
    let json =await response.json();
    allProductos = json.products;

  
    console.log("Respuesta correcta de la API", allProductos);
    swal.fire({
      title: "Cargando datos....",
      text: "Respuesta correcta de la API",
      icon: "success",
    });

allProductos.forEach(producto => {
    pintarCard(producto);
    
});


  } catch (error) {
    console.error("Error al cargar los datos", error);
    swal.fire({
      title: "Error",
      text: "Hubo un error al cargar los datos.",
      icon: "error",
    });
  }
}


function pintarCard(producto){

let columna =document.createElement("div");
columna.classList= "col-md-3 p-3 animate__animated animate__fadeInDown"

let card= document.createElement("div");
card.classList="card";

let imagen=document.createElement("img");
imagen.classList="card-img-top shadow-lg shadow  rounded my-1"
imagen.src = producto.thumbnail;

let cardBody =document.createElement("div");
cardBody.classList="card-body p-3";

let titulo=document.createElement("h4")
titulo.classList="card-title text-center";
titulo.textContent=`${producto.title}`;

let categoria=document.createElement("h6")
categoria.classList="text-center"
categoria.textContent=`${producto.category}`

let precio=document.createElement("h6");
precio.classList="text-center text-warning"
precio.textContent=`${producto.price}`

let marca=document.createElement("div");
marca.classList="text-center text-success"
marca.textContent=`${producto.brand}`

let btnAgregarCarrito=document.createElement("button");
btnAgregarCarrito.classList.add("btn","btn-success","p-1");
btnAgregarCarrito.textContent="Agregar al Carrito"


cardBody.appendChild(imagen);
cardBody.appendChild(titulo);
cardBody.appendChild(categoria);
cardBody.appendChild(marca);
cardBody.appendChild(precio);
cardBody.appendChild(btnAgregarCarrito)

card.appendChild(cardBody);
columna.appendChild(card);
tapeteDiv.appendChild(columna);

}

function filtrarProductos(producto) {


    
    
}









cargarUrl();
