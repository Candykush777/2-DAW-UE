let test = {
  nr: 10,
  b: false,
  str: "uno dos tres",
  arr: [10, 20, 30],
  obj: {
    x: 10,
    y: 20,
  },
  fn: function (arg) {
    console.log(arg);
  },
};

console.log(test.obj.x);
test.obj.y = 40;
