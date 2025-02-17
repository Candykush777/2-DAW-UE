let contact = {
  tel: "207-662-5412",
  email: "RonaldSMurphy@freepost.org",
};
/* if(contact.notes) { // if different then undefined
    console.log(contact.notes);
} */

if (!contact.notes) {
  // if undefined (check !)
  contact.notes = "something really important";
}

console.log(contact);

console.log(contact.notes); // -> undefined pero ya no

console.log(contact.email.private); // exception!

if (contact && contact.email) {
  console.log(contact.email.private);
}

contact && contact.email && console.log(contact.email.private);
