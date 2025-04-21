let divResultados = document.querySelector("#divResultados");
let divCarrito = document.querySelector("#carrito");

let filtroPrecios = document.querySelector("#selectPrecio");
let filtroMC = document.querySelector("#selectMarca");
let filtroCategoria = document.querySelector("#selectCategoria");

let btnFiltrar = document.querySelector("#button");

let btnCompar = document.querySelector("#btn-comprar");

const uRl = "https://dummyjson.com/products";

let allProductos = [];

let carrito = [];

let precioTotal = 0;

btnFiltrar.addEventListener("click", filtrarProductos);

async function cargarProductos() {
  try {
    let response = await fetch(uRl);
    let json = await response.json();

    allProductos = json.products;

    console.log("Respuesta correcta de la API", allProductos);
    Swal.fire({
      title: "Cargando datos....",
      text: "Respuesta correcta de la API",
      icon: "success",
    });

    allProductos.forEach((producto) => pintarCard(producto));

 
  } catch (error) {
    console.error("Error al cargar los datos", error);
    Swal.fire({
      title: "Error",
      text: "Hubo un error al cargar los datos.",
      icon: "error",
    });
  }
}

function pintarCard(producto) {
  let columna = document.createElement("div");
  columna.classList =
    "col-md-4 mb-2 mt-2 animate__animated animate__fadeInDown";

  let card = document.createElement("div");
  card.classList = "card";

  let imagen = document.createElement("img");
  imagen.classList = "card-img-top shadow-lg shadow rounded my-1";
  imagen.src = producto.thumbnail;

  let bodyCard = document.createElement("div");
  bodyCard.classList = "card-body p-3";

  let titulo = document.createElement("h5");
  titulo.classList = "card-title text-center ";
  titulo.textContent = ` ${producto.title} `;

  let categoria = document.createElement("h6");
  categoria.classList = "card-subtitle text-info text-center p-1";
  categoria.textContent = producto.category;

  let precio = document.createElement("h5");
  precio.classList = "card-text ";
  precio.textContent = `${producto.price} €`;

  let marca = document.createElement("p");
  marca.classList = "card-subtitle text-secondary text-center";
  marca.textContent = producto.brand;

  let btnAgregarCarrito = document.createElement("button");
  btnAgregarCarrito.classList.add("btn-agregar", "mt-2");
  btnAgregarCarrito.textContent = "Agregar al Carrito";

  bodyCard.appendChild(imagen);
  bodyCard.appendChild(titulo);
  bodyCard.appendChild(categoria);
  bodyCard.appendChild(marca);
  bodyCard.appendChild(precio);
  bodyCard.appendChild(btnAgregarCarrito);
  card.appendChild(bodyCard);
  columna.appendChild(card);
  divResultados.appendChild(columna);
  btnAgregarCarrito.addEventListener("click", (e) => {
    agregarAlCarrito(producto);
  });
}

function filtrarProductos() {
  let precioFiltrado = filtroPrecios.value;
  let marcaFiltrada = filtroMC.value;
  let categoriaFiltrada = filtroCategoria.value;

  let productosFiltrados = allProductos;

  switch (precioFiltrado) {
    case "1":
      //precio minimo

      productosFiltrados = productosFiltrados.filter(
        (producto) =>
          producto.price === Math.min(...productosFiltrados.map((p) => p.price))
      );

      break;
    //precio maximo

    case "2":
      productosFiltrados = productosFiltrados.filter(
        (producto) =>
          producto.price === Math.max(...productosFiltrados.map((p) => p.price))
      );

      break;

    case "3":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.price < 10
      );
  }

  switch (marcaFiltrada) {
    case "10":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.brand === "Annibale Colombo"
      );

      break;

    case "11":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.brand === "Bath Trends"
      );

      break;
    case "12":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.brand === "Calvin Klein"
      );

      break;
    case "13":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.brand === "Chanel"
      );

      break;
    case "14":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.brand === "Chic Cosmetics"
      );

      break;
    case "15":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.brand === "Dior"
      );

      break;
    case "16":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.brand === "Dolce & Gabbana"
      );

      break;
    case "17":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.brand === "Glamour Beauty"
      );

      break;
    case "18":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.brand === "Gucci"
      );

      break;
    case "19":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.brand === "Essence"
      );

      break;
    case "20":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.brand === "Furniture Co."
      );

      break;
    case "21":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.brand === "Knoll"
      );

      break;
    case "22":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.brand === "Nail Couture"
      );

      break;
    case "23":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.brand === "Velvet Touch"
      );

      break;

    default:
      break;
  }

  switch (categoriaFiltrada) {
    case "4":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.category === "beauty"
      );

      break;
    case "5":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.category === "fragrances"
      );

      break;
    case "6":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.category === "furniture"
      );
      break;
    case "7":
      productosFiltrados = productosFiltrados.filter(
        (producto) => producto.category === "groceries"
      );
      break;

    default:
      break;
  }

  divResultados.innerHTML = "";

  productosFiltrados.forEach((producto) => {
    pintarCard(producto);
  });
}

function agregarAlCarrito(producto) {
  Swal.fire({
    title: "¡Producto agregado!",
    text: `${producto.title} ha sido añadido al carrito.`,
    icon: "success",
  });

  carrito.push(producto);
  precioTotal += producto.price;

  // Actualizar el total
  document.getElementById("precioTotal").textContent = `${precioTotal.toFixed(
    2
  )}€`;

  // Mostrar el producto en el carrito

  mostrarProductoCarrito(producto);
}

function mostrarProductoCarrito(producto) {
  let listaCarrito = document.querySelector("#listaCarrito");

  let productoEnCarrito = document.createElement("div");
  productoEnCarrito.classList.add(
    "producto-carrito",
    "card",
    "p-2",
    "mb-2",
    "shadow-sm",
    "animate__animated",
    "animate__fadeInDown"
  );

  //hacemos esto para no tener que volver a pintar la card añadirla al append etc
  productoEnCarrito.innerHTML = `
    <div class="d-flex align-items-center">
      <img src="${producto.thumbnail}" class="img-fluid rounded" style="max-height: 70px; margin-right: 10px;">
      <div>
        <h6 class="text-dark mb-1">${producto.title}</h6>
        <h6 class="precio">${producto.price}€</h6>
      </div>
    </div>
  `;

  // Agregar el producto antes del precio total
  listaCarrito.appendChild(productoEnCarrito);
}

btnCompar.addEventListener("click", () => {
  Swal.fire({
    title: "¡Vas a comprar...!",
    text: `Vas a realizar 
una compra por valor de ${precioTotal.toFixed(2)}€. ¿Estás seguro?`,
    icon: "success",
  }).then((result) => {
    if (result.isConfirmed) {
      // Si el usuario confirma, vaciar el carrito
      carrito = [];
      precioTotal = 0;

      // Actualizar el precio total en el DOM
      document.getElementById("precioTotal").textContent = "0.00€";

      // Limpiar solo la lista de productos en el carrito (sin afectar al botón y al total)
      document.getElementById("listaCarrito").innerHTML = "";
    }
  });
});

cargarProductos();
