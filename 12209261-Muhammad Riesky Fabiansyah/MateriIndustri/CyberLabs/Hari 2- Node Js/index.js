const http = require('http');
const {testFunction, newFunction} = require('./function.js');
// CommonJS / ESM - Ecmascript

//Promise
const printDelayed = () => {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      resolve('Sudah Sampai');
      // reject('saya kena tilang');
    }, 1000 * 5);
  });
  
}

var server = http.createServer( async (req, res) => {

  switch (req.url) {
    case '/about':
      // testFunction();
      // newFunction('newFunction - Ini berasal dari parameter');
      console.log('Saya Otw');
      const value = await printDelayed();
      console.log(value);
      console.log('Ngopi');
      res.write('about');
      res.end();
      break;
    case '/contact':
      res.write("contact");
      res.end();
      break;
    default:
      res.write("404 Not Found");
      res.end();
    break;
  }

  // if (req.url == '/about'){
  //   res.write('about');
  //   res.end();
  // } else if (req.url == '/contact'){
  //   res.write("contact");
  //   res.end();
  // } else {
  //   res.write("404 Not Found");
  //   res.end(); 
  // }
});

const port = 3000;
server.listen(port, () => {
  console.log(`Server berjalan di http://localhost:${port}`);
});