const http = require("http");
const { testFunction, newFunction } = require("./function");
// CommonJs /ESM - Ecmascript

//Promise
const printAgakTelat = () => {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      // resolve('Sudah sampai');
    //   resolve("sudah sampai");
    reject("saya kena tilang");
    }, 1000 * 5);
  });
};

var server = http.createServer(async (req, res) => {
  switch (req.url) {
    case "/about":
      console.log("saya otw");
      const value = await
      printAgakTelat() .then((value) => {
          console.log(value);
          console.log("ngopi") })
        .catch((error) => console.log(error));

      res.write("ini about");
      res.end();
      break;

    case "/contact":
      res.write("ini contact");
      res.end();
      break;

    default:
      res.write("404 not found");
      res.end();
  }

  // if (req.url == '/about') {
  //     res.write("ini about");
  //     res.end();
  // } else if  (req.url == '/contact') {
  //     res.write("ini contact");
  //     res.end();

  // } else {
  //     res.write("404 not found");
  //     res.end();
  // }
});

const port = 3000;
server.listen(port);
console.log(`Server berjalan di http://localhost:${port}`);
