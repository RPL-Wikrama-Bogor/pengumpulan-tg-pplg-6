// buat server

const { log } = require('console');

let http = require('http')

// let server = http.createServer(function (req, res){
//     res.end("Hello World, this is node js, and now we're talking baby!");
// })

// server.listen(9000);

// console.log("server running on http://localhost:9000");

// web server dibawah ini

let server = http.createServer(function (req, res){
    // res.writeHead(200, {'Content-Type': 'text/html'});
    // kita bisa ubah konten jadi apa aja
    res.writeHead(200, {'Content-Type': 'application/json'});
    // res.writeHead(200, {'Content-Type': 'application/pdf'});
    switch (req.url) {
        case '/':
            res.write("Ini adalah halaman home")
            break;
        case '/about':
            res.write("Ini adalah halaman about")
            break;
        case '/contact':
            res.write("contact me: 085722744035")
            break;
        default:
            res.write("kamu ngakses halaman yang gaada")
            break;
    }
    res.end();
}).listen(9000);

console.log("server running on http://localhost:9000");