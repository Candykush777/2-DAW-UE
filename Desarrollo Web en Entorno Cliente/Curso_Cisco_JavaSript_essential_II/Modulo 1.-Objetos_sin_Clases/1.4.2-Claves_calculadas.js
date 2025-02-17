let contact = {
  email_1: "RonaldSMurphy@freepost.org",
  email_2: "rsmurphy@briazz.com",
};
for (i = 1; i <= 2; i++) {
  let key = "email_" + i;
  console.log(key);
  console.log(contact[key]);
}

let contact2 = {
  personal: "RonaldSMurphy@freepost.org",
  work: "rsmurphy@briazz.com",
  other: "ronald@gmail.com",
};

for (let key of Object.keys(contact2)) {
  console.log(key); // Muestra el nombre de la clave (personal, work, other)
  console.log(contact2[key]); // Muestra su valor
}

for (i = 1; i <= 2; i++) {
  let key = "email_" + i;
  console.log(`${key}: ${contact[key]}`); //mejoramos el formato de salida
}
