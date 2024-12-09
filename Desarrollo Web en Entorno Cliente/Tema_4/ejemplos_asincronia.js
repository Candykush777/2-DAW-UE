const datos = [
  {
    id: 1,
    title: "Iron Man",
    year: 2008,
  },
  { id: 2, title: "spiderman : Homecoming", year: 2017 },
  {
    id: 3,
    title: "avengers: Endgame",
    year: 2019,
  },
];

console.log(datos);

const getDatos = () => {
  return new Promise((resolve, reject) => {
    setTimeout(() => {

        if (datos.length > 0) {
            resolve(datos); //Si hay datos resuelve la promesa
            
        }else{
            reject("No hay datos disponibles")
        }
      
    }, 1500);
  });
};

/* console.log(getDatos()); no funciona */

/* getDatos().then((datos) => console.log(datos)).catch((error) => console.error(error));  */
// asi se pueden concatenar promesas , salia perfecto pero borramos para otro ejemplo

async function fetData() {
    
try {
    const datos2 =await getDatos();
console.log(datos2);
    
} catch (err) {
    console.log(err);
    
}}


fetData();



