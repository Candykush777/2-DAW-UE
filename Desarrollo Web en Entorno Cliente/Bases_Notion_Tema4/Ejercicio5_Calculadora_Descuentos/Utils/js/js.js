let precioInput=document.querySelector("#precio");
let descuentoInput=document.querySelector("#descuento");
let btnCalcular=document.querySelector("#btn");
let result=document.querySelector("#resultado");


btnCalcular.addEventListener("click",()=>{

    let precio=parseFloat(precioInput.value.trim());
    let descuento=parseFloat(descuentoInput.value.trim());

    result.innerHTML=""; //Limpiamos resultado anteriores

    if (isNaN(precio) || isNaN(descuento)) {

        swal.fire({
            title: "Introduce un número válido",
            text: "Debe introducir un número ",
            icon: "warning",
          });
          return;
        
    }

let conversion= ((precio * descuento)/100)  ;
let resultadofinal=precio-conversion;

let p=document.createElement("p");
p.textContent=`EL Precio final despues del descuento es ${resultadofinal.toFixed(2)} €`
result.append(p);
Swal.fire({
    title: "Exito!!!",
    text: `Con el precio: ${precio} , y el descuento de ${descuento} %, Precio Final: ${resultadofinal.toFixed(2)} €  `,
    icon: "success",
  });

  precioInput.value ="";
  descuentoInput.value="";

});


