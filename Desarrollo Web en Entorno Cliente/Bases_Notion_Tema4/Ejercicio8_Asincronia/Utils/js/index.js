let usuarios = [];

let carrito = [];

let precioTotal = 0;

let divContainer = document.querySelector("#productos");

let eliminarCarritoBtn = document.querySelector("#eliminarCarrito");

let filtrado = document.querySelector("#filtrar");

filtrado.addEventListener("change", aplicarFiltro);

let filtradoCategoria = document.querySelector("#filtrarCategoria");

filtradoCategoria.addEventListener("change", aplicarFiltro);

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

      usuarios.forEach((producto) => {
        pintarCard(producto);
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

function pintarCard(producto) {
  let columna = document.createElement("div");
  columna.classList.add("col-4", "mb-4");

  let card = document.createElement("div");
  card.classList.add("card", "shadow");

  let cardBody = document.createElement("div");
  cardBody.classList.add("card-body");

  let title = document.createElement("h5");
  title.classList.add("card-title");
  title.innerHTML = `<b>Nombre producto:</b> ${producto.title}`;

  let price = document.createElement("p");
  price.classList.add("card-text", "text-primary");
  price.innerHTML = `<b>Precio: </b> ${producto.price}`;

  let descripcion = document.createElement("p");
  descripcion.classList.add("card-text", "text-muted");
  descripcion.innerHTML = `<b>Descripción: </b> ${producto.description}`;

  let categoria = document.createElement("h6");
  categoria.classList.add("card-text");
  categoria.innerHTML = `<b>Categoria: </b> ${producto.category}`;

  let btnAgregarCarrito = document.createElement("button");
  btnAgregarCarrito.classList.add("btn", "btn-success", "btn-agregar", "mt-2");
  btnAgregarCarrito.textContent = "Agregar al Carrito";

  cardBody.appendChild(title);
  cardBody.appendChild(price);
  cardBody.appendChild(descripcion);
  cardBody.appendChild(categoria);
  cardBody.appendChild(btnAgregarCarrito);
  card.appendChild(cardBody);
  columna.appendChild(card);

  divContainer.appendChild(columna);

  btnAgregarCarrito.addEventListener("click", (e) => {
    agregarAlCarrito(producto);
  });
}

function agregarAlCarrito(producto) {
  Swal.fire({
    title: "¡Producto agregado!",
    text: `${producto.title} ha sido añadido al carrito.`,
    icon: "success",
    timer: 2000,
  });

  setTimeout(() => {
    carrito.push(producto);

    precioTotal += producto.price;

    document.getElementById("precioTotal").textContent = `${precioTotal.toFixed(
      2
    )}€`;

    //tenemos que mostrar el producto en el carrito

    mostrarProductoCarrito(producto);
  }, 2000);
}

//mostrar elproducto en el carrito

function mostrarProductoCarrito(producto) {
  let listaCarrito = document.querySelector("#listaCarrito");

  let productoEnCarrito = document.createElement("li");

  productoEnCarrito.classList.add(
    "list-group-item",
    "d-flex",
    "justify-content-between",
    "align-items-center"
  );

  productoEnCarrito.innerHTML = `${producto.title} Precio: ${producto.price}€`;

  let eliminarBtn = document.createElement("button");
  eliminarBtn.classList.add("btn", "btn-danger", "btn-sm");
  eliminarBtn.textContent = "Eliminar";

  //elinarmos el producto del carrito

  eliminarBtn.addEventListener("click", (e) => {
    carrito = carrito.filter((item) => item !== producto);

    precioTotal -= producto.price;

    //ahora actualizamos su precio

    document.getElementById(
      "precioTotal"
    ).textContent = `Total: ${precioTotal.toFixed(2)}€`;

    productoEnCarrito.remove();
  });

  productoEnCarrito.appendChild(eliminarBtn);
  listaCarrito.appendChild(productoEnCarrito);
}

//ahora queremos eliminar todo el carrito y dejarlo vacio

eliminarCarritoBtn.addEventListener("click", (e) => {
  carrito = [];
  precioTotal = 0;
  let precioTotalCarrito = document.getElementById("precioTotal");
  let listaCarritoProducto = document.getElementById("listaCarrito");

  //actualizamos el DOM
  precioTotalCarrito.textContent = `Total: ${precioTotal.toFixed(2)}€`;

  listaCarritoProducto.innerHTML = "";
});




  // Inicializamos productosFiltrados con todos los productos de usuarios
  function aplicarFiltro() {
    let filtrar = filtrado.value;
    let filtrarCategoria = filtradoCategoria.value;
  
    // Inicializamos productosFiltrados directamente con usuarios
    let productosFiltrados = usuarios;
  
    // Obtener precio máximo y mínimo de los productos, he usado map parece que va bien
    let precioMaximo = Math.max(...usuarios.map((producto) => producto.price));
    let precioMinimo = Math.min(...usuarios.map((producto) => producto.price));
  
    // Filtrar por precio
    if (filtrar) {
      switch (filtrar) {
        case "1":
          productosFiltrados = productosFiltrados.filter(
            (producto) => producto.price === precioMinimo
          );
          break;
  
        case "2":
          productosFiltrados = productosFiltrados.filter(
            (producto) => producto.price === precioMaximo
          );
          break;
  
        case "3":
          productosFiltrados = productosFiltrados.filter(
            (producto) => producto.price <= 100
          );
          break;
  
        case "4":
          productosFiltrados = productosFiltrados.filter(
            (producto) => producto.price > 100
          );
          break;
  
        default:
          // Si no hay filtro de precio, asignamos todos los productos
          productosFiltrados = productosFiltrados;
          break;
      }
    }
  
    // Filtrar por categoría
    if (filtrarCategoria) {
      switch (filtrarCategoria) {
        case "5":
          productosFiltrados = productosFiltrados.filter(
            (producto) => producto.category === "men's clothing"
          );
          break;
  
        case "6":
          productosFiltrados = productosFiltrados.filter(
            (producto) => producto.category === "women's clothing"
          );
          break;
  
        case "7":
          productosFiltrados = productosFiltrados.filter(
            (producto) => producto.category === "electronics"
          );
          break;
  
        case "8":
          productosFiltrados = productosFiltrados.filter(
            (producto) => producto.category === "jewelery"
          );
          break;
  
        default:
          // Si no hay filtro de categoría, asignamos todos los productos
          productosFiltrados = productosFiltrados;
          break;
      }
    }
  
    // Mostrar los productos filtrados
    mostrarProductos(productosFiltrados);
  }
  


// Función para mostrar los productos filtrados
function mostrarProductos(productos) {
  divContainer.innerHTML = "";

  productos.forEach((producto) => {
    pintarCard(producto);
  });
}

//esto deberia ir despues de todo fuera de todo ¡¡
cargarProductos();
