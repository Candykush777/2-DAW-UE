let inputNombre = document.querySelector("#nombre");
let inputDescripcion = document.querySelector("#descripcion");
let inputPrioridad = document.querySelector("#prioridad");
let inputFecha = document.querySelector("#fecha");
let checkPrioritaria = document.querySelector("#checkInput");
let btnAgregar = document.querySelector("#btnAgregar");
let divresultados = document.querySelector("#tareas");

let tareas = [];
let contador = 1; // ponems 1 para que los id empeicen en 1

//Vamos a dar vida al boton agregar con la logica necesaria

btnAgregar.addEventListener("click", () => {
  let nombre = inputNombre.value;
  let descripcion = inputDescripcion.value;
  let prioridad = inputPrioridad.value;
  let fecha = inputFecha.value;
  if (checkPrioritaria.checked) {
    if (
      nombre.length > 0 &&
      descripcion.length > 0 &&
      prioridad.length > 0 &&
      fecha.length > 0
    ) {
      //guardar datos
      Swal.fire({
        title: "Exito",
        text: "Tarea guardada correctamente",
        icon: "success",
      });

      const nuevaTarea = new tarea(
        contador,
        nombre,
        descripcion,
        fecha,
        prioritaria,
        prioridad,
        false,
        getImagenPorPrioridad(prioridad)
      );
      tareas.push(nuevaTarea);
      contador++;
      agregarNodoObjeto(nuevaTarea);
      clearInputs();

      agregarNodo(nombre, descripcion, prioridad, fecha);

      clearInputs();
    } else {
      Swal.fire({
        title: "Error",
        text: "Introduzca todos los datos",
        icon: "error",
      });
    }
  }
});

function clearInputs() {
  inputNombre.value = "";
  inputDescripcion.value = "";
  inputPrioridad.value = "2";
  inputFecha.value = "";
  checkPrioritaria.checked = false;
}

function agregarNodoObjeto(tarea) {
  let columna = document.createElement("div");
  columna.className = "col-md-3 animate__animated animate__fadeInDown";
  columna.dataset.id = tarea.id;

  let carta = document.createElement("div");
  carta.className = "card";
  let imagen = document.createElement("img");
  imagen.className = "card-img-top";
  imagen.src = tarea.imagen; // ya no necesitamos la logica de antes aqui, xq hemos creado la funcion
  //que se llama dentro de la funcion del boton agregar

  /* if (prioridad == 2) {
    imagen.src =
      "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4tANuBJoViapolNoVPmOHlaaFityDbdvSyyhUVpIL_MvB2K3IS6DNmUXkAtzhOPbbHRc&usqp=CAU";
  } else if (prioridad == 3) {
    imagen.src =
      "https://static-00.iconduck.com/assets.00/medium-priority-icon-512x512-kpm2vacr.png";
  } else {
    imagen.src =
      "https://static-00.iconduck.com/assets.00/high-priority-icon-1024x1024-ryazhwgn.png";
  } */

  let bodyCard = document.createElement("div");
  bodyCard.className = "card-body";

  let titulo = document.createElement("h5");
  titulo.className = "card-title";
  titulo.textContent = tarea.titulo; //lo cambiamos xq no influye y no necesita recorrer todo el DOM con perdida de memoria
  /* titulo.innerText = nombre; */

  let texto = document.createElement("p");
  texto.className = "card-text";
  titulo.textContent = tarea.descripcion;
  /* texto.innerText = descripcion; */

  let textoFecha = document.createElement("p");
  textoFecha.className = "card-text";
  textoFecha.innerText = `Fecha máxima <strong>${tarea.fecha}</strong>`;

  let completarBnt = document.createElement("button");
  completarBnt.className = "btn btn-success mt-2"; //es un boton de boottrap con otroe estilo, verde para verificar
  completarBnt.textContent = "Completar";
  /* completarBnt.innerText = "Completar"; */
  completarBnt.addEventListener("click", () =>
    completarTarea(tarea.id, completarBnt)
  );

  /*   completarBnt.addEventListener("click", () => {
    Swal.fire({
      title: "Tarea Completada",
      text: `"${nombre}" se ha marcado como completada`,
      icon: "success",
    });
    columna.remove(); //elimina la tarjeta
  }); */

  bodyCard.append(titulo);
  bodyCard.append(texto);
  bodyCard.append(textoFecha);
  bodyCard.append(completarBnt); // Añade el botón a la tarjeta

  carta.append(imagen);
  carta.append(bodyCard);
  columna.append(carta);

  divresultados.append(columna);
}

function getImagenPorPrioridad(prioridad) {
  if (prioridad == 2) {
    return "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4tANuBJoViapolNoVPmOHlaaFityDbdvSyyhUVpIL_MvB2K3IS6DNmUXkAtzhOPbbHRc&usqp=CAU";
  } else if (prioridad == 3) {
    return "https://static-00.iconduck.com/assets.00/medium-priority-icon-512x512-kpm2vacr.png";
  } else {
    return "https://static-00.iconduck.com/assets.00/high-priority-icon-1024x1024-ryazhwgn.png";
  }
}
//aqui aunque se llame nodoColumna deja mas claroq ue es une elemento del DOM y no pensamos que es algo de boottrap
//pero es como si fuese la variable columna
function completarTarea(id, nodoColumna) {
  let tareaCompletada = tareas.find((tarea) => tarea.id === id);

  if (tareaCompletada) {
    Swal.fire({
      title: "Tarea Completada",
      text: `"${tareaCompletada.titulo}" se ha marcado como completada`,
      icon: "success",
    });
    nodoColumna.remove(); // eliminamos la tarea del DOM
    tareas = tareas.filter((tarea) => tarea.id !== id); //elimina la tarea del array principal
  }
}

filtroSelect.addEventListener("change", () => {
  let filtrar = filtroSelect.value;
  let tareasFiltradas;

  if (filtrar !== "1") {
    tareasFiltradas = tareas.filter((tarea) => tarea.prioridad === filtro);
  }
});

function actualizarListaFiltrada(tareasFiltradas) {
  divresultados.innerHTML = "";

  tareasFiltradas.forEach((tarea) => {
    agregarNodoObjeto(tarea); //llama a la funcion que digamos renderiza la tarea
  });
}
