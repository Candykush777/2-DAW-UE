let alojamientoInput=document.querySelector("#alojamiento");
let alimentacionInput=document.querySelector("#alimentacion");
let entretenimientoInput=document.querySelector("#entretenimiento");
let btnCalcular=document.querySelector("#calcularGastos");

//evento

btnCalcular.addEventListener('click', ()=>{

    let alojamiento=parseFloat(alojamientoInput.value.trim());
    let alimentacion=parseFloat(alimentacionInput.value.trim());
    let entretenimiento=parseFloat(entretenimientoInput.value.trim());

    //validamos

    if (isNaN(alojamiento) || isNaN(alimentacion) || isNaN(entretenimiento)) {

        Swal.fire({
            title: "Introduce todos los datos",
            text: "Completa los campos ",
            icon: "warning"
          });
          return;
        
    }

    const total=alojamiento + alimentacion + entretenimiento;

    Swal.fire({
        title: "Resultado",
        text: `El coste total del viaje es ${total.toFixed(2)}€.`,
        icon: "success",
      });
 


});


