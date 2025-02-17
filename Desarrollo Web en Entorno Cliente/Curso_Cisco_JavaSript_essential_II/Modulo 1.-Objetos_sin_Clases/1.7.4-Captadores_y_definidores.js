let contact = {
  _tel: "207-662-5412",
  get tel() {
    return this._tel;
  },
};
console.log(contact.tel);
contact.tel = "100-100-1000"; //esto no sale xq no hay setter y xq es tel no _tel
console.log(contact.tel);
contact.email = "RonaldSMurphy@freepost.org";
console.log(contact.email);
console.log(contact);

console.log("--------------");

let contact2 = {
  _tel: "207-662-5412",
  get tel() {
    return this._tel;
  },
  set tel(t) {
    this._tel = t;
  },
};
console.log(contact2.tel);
contact2.tel = "100-100-1000";
console.log(contact2.tel);

console.log("------------------");

let contact3 = {
  _age: 36,
  firstName: "David",
  lastName: "Taylor",
  get fullName() {
    return `${this.firstName} ${this.lastName}`;
  },
  get age() {
    return this._age;
  },
  set age(a) {
    if (a > 0) this._age = a;
  },
};
console.log(contact3.fullName);
contact3.age = -20; // no hace nada xq tenemos if( a > 0)
console.log(contact3.age);
console.log(contact3);
