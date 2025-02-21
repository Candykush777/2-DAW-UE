// Constructor de Image (no se debe reescribir)
function Image(title, artist, date) {
  this.title = title;
  this.artist = artist;
  this.date = date;
}

// Añadimos el método show al prototipo de Image
Image.prototype.show = function () {
  console.log(`${this.title} (${this.artist}, ${this.date})`);
};

// Objeto images original
let images = {
  list: [],

  contains: function (title) {
    for (let image of this.list) {
      if (image.title === title) {
        return true;
      }
    }
    return false;
  },

  add: function (title, artist, date) {
    if (!this.contains(title)) {
      this.list.push(new Image(title, artist, date));
    }
  },

  // Redefinimos el método show para que use el método show() del prototipo de Image
  show: function () {
    for (let image of this.list) {
      image.show();
    }
  },

  clear: function () {
    this.list = [];
  },
};

// Añadimos el método edit al objeto images
images.edit = function (title, artist, date) {
  for (let image of this.list) {
    if (image.title === title) {
      image.artist = artist;
      image.date = date;
      break;
    }
  }
};

// Añadimos el método delete al objeto images
images.delete = function (title) {
  for (let i = 0; i < this.list.length; i++) {
    if (this.list[i].title === title) {
      this.list.splice(i, 1);
      break;
    }
  }
};

// Secuencia de prueba:
images.add("Mona Lisa", "Leonardo da Vinci", 1503);
images.add("The Last Supper", "Leonardo da Vinci", 1495);
images.add("The Starry Night", "Vincent van Gogh", 1889);

images.edit("Mona Lisa", "Leonardo da Vinci", 1504);
images.delete("The Last Supper");

images.show();
// Salida esperada:
// Mona Lisa (Leonardo da Vinci, 1504)
// The Starry Night (Vincent van Gogh, 1889)
