let contact = {
  tel: "207-662-5412",
  email: "RonaldSMurphy@freepost.org",
};

contact.email = ["RonaldSMurphy@freepost.org", "rsmurphy@briazz.com"];

contact.email = {
  private: "RonaldSMurphy@freepost.org",
  work: "rsmurphy@briazz.com",
};

contact.tel === contact["tel"];
contact.email.work === contact["email"]["work"]; //aquí se expresa de manera difernete lo mismo, mas facil con .tel

console.log(contact.tel === contact["tel"]);
console.log(contact.email.work === contact["email"]["work"]); //deberia ser true y true
