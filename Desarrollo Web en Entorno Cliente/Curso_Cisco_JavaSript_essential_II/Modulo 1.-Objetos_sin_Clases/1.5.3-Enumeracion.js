let contact = {
  tel: "207-662-5412",
  email: "RonaldSMurphy@freepost.org",
};
for (x in contact) {
  // print property name
  console.log(x);
}

for (x in contact) {
  // print property value
  console.log(contact[x]);
}

for (x in contact) {
  // print property name, type and value
  console.log(`${x} : ${typeof contact[x]} : ${contact[x]}`);
}
