/* setTimeout(() => {

    console.log("Ejecucion postergada");
       
}, 2000);
setInterval(() => {
    console.log("Ejecucion recurrente");
        }, 2000); */

//Promesas manuales
/* let promesa =new Promise((resolve, reject) => {
    }) */
//mediante el metodo then cuando es correcta o incorrecta la contestacion y catch

//esto es hacerte tu propia promesa peor volvemos a la anterior

/* let promesa=new Promise((res, rej) => {
    //lógica de la promesa
    setTimeout(()=>{

        let numero=Math.random() * 10;
        
        if (numero < 5 ) {
            rej("Numero muy pequeño")
            
        }else{

            res(numero)
        }
        
    },2000);
    
});

promesa.then((resolve) =>{

    console.log(`Numero calculado con valor ${resolve}`);
    
}).catch((error) =>{

    console.log(error);
    
}); */

fetch("https://dummyjson.com/products")
  .then((response) => response.json())
  .then((response1) => {
    console.log("Respuesta correcta");
    /* console.log(response1.products); */
    let products=response1.products;
    
  return products;
    
        
    }).then((response2)=>{
        let filtrada = response2.filter((element)=>element.price <100);
        filtrada.forEach((element)=> {
            console.log(`${element.title} ${element.price}`);
            
        });

    })
  
  .catch(() => {
    console.log("Contestacion incorrecta");
  })
  .finally(() => {
    console.log("finalizando dependencias de promesa");
  })
