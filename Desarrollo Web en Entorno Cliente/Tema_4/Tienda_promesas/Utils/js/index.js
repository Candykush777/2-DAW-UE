let inputID =document.querySelector("#filtroID");
let precioSelector = document.querySelector("#filtroPrecio");
let categoriaSelector =document.querySelector("#filtroCategoria");
let divResultados = document.querySelector("#productos");

let btnFiltrar = document.querySelector("#btnFiltrar");


let products = [];

btnFiltrar.addEventListener("click",filtrado);





//Recibir el json

fetch("https://dummyjson.com/products").then((response)=> response.json()).then((response1)=>{
    console.log("respuesta correcta");
    products =response1.products;
    
    
    
    //llamar a pintarCard para cada producto

    products.forEach((product) =>pintarCard(product)); 
        
    }).catch(() => {
    console.log("Contestacion incorrecta");
    
  })
  .finally(() => {
    console.log("finalizando dependencias de promesa");
  });



function pintarCard(product) {

    let columna =document.createElement("div");
    columna.className="col-md-3 animate__animated animate__fadeInDown";

    let carta=document.createElement("div");
    carta.className="card";

    let imagen=document.createElement("img")
    imagen.className="card-img-top";
    imagen.src =product.thumbnail;

    let bodyCard=document.createElement("div");
    bodyCard.className="card-body";

    let titulo=document.createElement("h5");
    titulo.className="card-title";
    titulo.textContent=product.titulo;

    let categoria=document.createElement("p");
    categoria.className="card-text";
    categoria.textContent=`Categoría: ${product.category}`;

    let price=document.createElement("p");
    price.className="card-text";
    price.textContent=`Precio: ${product.price}€`;

    let descuento=document.createElement("p");
    descuento.className="card-text";
    descuento.textContent=`Descuento: ${product.discountPercentage}%`;

    let rating=document.createElement("p");
    rating.className="card-text";
    rating.textContent=` Rating: ${product.rating}`;

    let stock=document.createElement("p");
    stock.className="card-text";
    stock.textContent=`Stock: ${product.stock}`;


    columna.append(carta);
    carta.append(imagen);
    carta.append(bodyCard);

    bodyCard.append(titulo);
    bodyCard.append(categoria);
    bodyCard.append(price);
    bodyCard.append(descuento);
    bodyCard.append(rating);
    bodyCard.append(stock);

    // Agregar la columna al contenedor de resultados
    divResultados.append(columna);
   
}

function filtrado(){


    let precioFiltrado=precioSelector.value;

    let productosFiltrados;

    if (precioFiltrado === "1") {

        productosFiltrados=products.filter((product) =>product.price <10)
        
    }else if (precioFiltrado === "2") {

        productosFiltrados=products.filter((product)=>product.price >=10 && product.price <=40)
        
    }else if (precioFiltrado === "3") {

        productosFiltrados=products.filter((product)=>product.price >40)
        
    }else{

        productosFiltrados=products;
    }

    divResultados.innerHTML=""; 

    productosFiltrados.forEach((product)=> {

        pintarCard(product);
    });
        
    }




