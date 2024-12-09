let inputNombre = document.querySelector("#nombreInput");
let inputMail = document.querySelector("#emailInput");
let inputPass = document.querySelector("#passInput");
let edadPass = document.querySelector("#edadInput");
let inputGenero = document.querySelector("#generoInput");
let checkGuardar = document.querySelector("#checkInput");
let btnGuardar = document.querySelector("#btnGuardar");
let divResultados = document.querySelector("div.row.g-4");

let usuarios = [];
let edadSelector =document.querySelector("#edadSelector");
let generoSelector =document.querySelector("#generoSelector");
let btnFiltrar = document.querySelector("#btnFiltrar");

btnFiltrar.addEventListener("click", filtrarUsuario);



btnGuardar.addEventListener("click", (e) => {
  //sacar toda la información
  /* e.preventDefault();  */

  let nombre = inputNombre.value;
  let email = inputMail.value;
  let pass = inputPass.value;
  let edad = edadPass.value;
  let genero = inputGenero.value;

  if (checkGuardar.checked) {
    if (
      nombre.length > 0 &&
      email.length > 0 &&
      pass.length > 0 &&
      genero.length > 0 &&
      edad.length > 0
    ) {
      //guardar datos
      Swal.fire({
        title: "Exito",
        text: "Usuario guardado correctamente",
        icon: "success",
      });

      let usuario = { nombre, email, edad, genero };
      usuarios.push(usuario);

      agregarNodo(nombre, email, edad, genero);

      clearInputs();
    } else {
      Swal.fire({
        title: "Error",
        text: "falta algún dato",
        icon: "error",
      });
    }
  }
});


/* inputPass.addEventListener("keyup", (e) => {
  console.log(e.target.value.length); //cava vez que pulso quiero saber cuantos caracteres hay en el input
}); */

function clearInputs() {
  inputNombre.value = "";
  inputMail.value = "";
  inputPass.value = "";
  edadPass.value = "";
  inputGenero.value = "1";
}

function agregarNodo(nombre, email, edad, genero) {
  let columna = document.createElement("div"); /* <div calss = "col"></div> */

  columna.className = "col animate__animated animate__fadeInDown";
  let carta = document.createElement("div");
  carta.className = "card";
  let imagen = document.createElement("img");
  imagen.className = "card-img-top";
  if (genero == 1) {
    imagen.src = "https://cdn-icons-png.flaticon.com/512/3233/3233483.png";
  } else {
    imagen.src = "https://cdn-icons-png.flaticon.com/512/3577/3577099.png";
  }

  let bodyCard = document.createElement("div");
  bodyCard.className = "card-body";

  let titulo = document.createElement("h5");
  titulo.className = "card-title";
  titulo.innerText = nombre;

  let texto = document.createElement("p");
  texto.className = "card-text";
  texto.innerText = email;

  let textoedad = document.createElement("p");
  textoedad.className = "card-text";
  textoedad.innerText = edad;

  bodyCard.append(titulo);
  bodyCard.append(texto);
  bodyCard.append(textoedad);

  carta.append(imagen);
  carta.append(bodyCard);
  columna.append(carta);

  divResultados.append(columna);
}

function filtrarUsuario() {
  /* const seleccion = document.querySelector("#selected").value; */
  const edadSelecionada =edadSelector.value;
  const generoSelecionado =generoSelector.value;

  divResultados.innerHTML = "";

  let usuariosFiltrados =usuarios;

  if (generoSelecionado !== "0") {
    usuariosFiltrados = usuariosFiltrados.filter((usuario)=>usuario.genero ==generoSelecionado);
  } 

  //según edad

 /*  if (edadSelecionada === "edad") {
    usuariosFiltrados = usuarios;
  } */
  if (edadSelecionada === "mayorEdad") {
    usuariosFiltrados = usuariosFiltrados.filter(
      (usuario) => parseInt(usuario.edad) >= 18
    );
  } else if (edadSelecionada === "menorEdad") {
    usuariosFiltrados = usuariosFiltrados.filter(
      (usuario) => parseInt(usuario.edad) < 18
    );
  }

  usuariosFiltrados.forEach((usuario) => {
    agregarNodo(usuario.nombre, usuario.email, usuario.edad, usuario.genero);
  });
}

/* inputGenero.addEventListener("change", filtrarUsuario); */
