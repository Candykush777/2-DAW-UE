let inputNombre = document.querySelector("#nombre");
let inputDescripcion = document.querySelector("#descripcion");
let inputPrioridad = document.querySelector("#prioridad");
let inputFecha = document.querySelector("#fecha");
let checkPrioritaria = document.querySelector("#checkInput");
let btnAgregar = document.querySelector("#btnAgregar");
let divResultados = document.querySelector("#tareas");
let filtroSelect = document.querySelector("#filtroSelect"); 

let tareas = [];
let id = 1; // ponems 1 para que los id empeicen en 1



btnAgregar.addEventListener("click", () => {
  let titulo = inputNombre.value;
  let descripcion = inputDescripcion.value;
  let prioridad = inputPrioridad.value;
  let fecha = inputFecha.value;
  let prioritaria = checkPrioritaria.checked;
  if (checkPrioritaria.checked) {
    if (
      titulo.length > 0 &&
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
        id,
        titulo,
        descripcion,
        fecha,
        prioritaria,
        prioridad,
        false,
        getImagenPorPrioridad(prioridad)
      );
      /* console.log("Tarea creada:", nuevaTarea); // Verificar contenido */
/* tareas.push(nuevaTarea); */
      tareas.push(nuevaTarea);
      id++;
      agregarNodoObjeto(nuevaTarea);
      clearInputs();

    /*   agregarNodo(nombre, descripcion, prioridad, fecha);

      clearInputs(); */
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
  texto.textContent = tarea.descripcion;
  /* texto.innerText = descripcion; */

  let textoFecha = document.createElement("p");
  textoFecha.className = "card-text";
  textoFecha.innerText = `Fecha máxima: ${tarea.fecha}`;

  let completarBnt = document.createElement("button");
  completarBnt.className = "btn btn-success mt-2";
  completarBnt.textContent = "Completar";
  
  // El evento ahora elimina directamente la tarea del DOM y del array
  completarBnt.addEventListener("click", () => {
    // Muestra el mensaje de tarea completada
    Swal.fire({
      title: "Tarea Completada",
      text: `"${tarea.titulo}" se ha marcado como completada`,
      icon: "success",
    });

    // Elimina el nodo completo (columna que contiene la carta)
    columna.remove();

    // Elimina la tarea del array
    tareas = tareas.filter((tareaItem) => tareaItem.id !== tarea.id);
  });



  bodyCard.append(titulo);
  bodyCard.append(texto);
  bodyCard.append(textoFecha);
  bodyCard.append(completarBnt); // Añade el botón a la tarjeta

  carta.append(imagen);
  carta.append(bodyCard);
  columna.append(carta);

  divResultados.append(columna);
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

function aplicarFiltro() {
  let filtrar = filtroSelect.value;
  
  let tareasFiltradas;

  // Filtrar las tareas dependiendo de la prioridad seleccionada
  if (filtrar !== "1") {
    // Filtrar por prioridad seleccionada (cuando no es "1")
    tareasFiltradas = tareas.filter((tarea) => tarea.prioridad === filtrar);
  } else {
    // Si no hay filtro ("1"), tomar todas las tareas
    tareasFiltradas = [...tareas];
  }

  
  divResultados.innerHTML = "";
  tareasFiltradas.forEach((tarea) => {
    agregarNodoObjeto(tarea); // 
  });
 
}


