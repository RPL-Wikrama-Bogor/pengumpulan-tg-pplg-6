const http = require("http");
//commonjs/esm -ecmascript

const { testFunction, newFunction } = require('./function');

const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
           resolve('sudah sampai');
        // reject("sudah kna tilng");

        }, 1000 * 5);

     });
}
var server = http.createServer( async (req, res) => {

    switch (req.url ) {
        case '/about':
            console.log('saya otw');
            const value = await printAgakTelat();
            console.log(value);
            console.log('ngopi bang')
            res.write('ini about');
            res.end();
            break;

        case '/contact':
            res.write('ini contact');
            res.end();
            break;
        default:
            res.write('404 not found');
            res.end();
            break;
    }



//    if (req.url == '/about') {
//     res.write('ini about');
//     res.end();
//    } else if (req.url == 'contact') {

//    } else {
//     res.write('404 not found');
//     res.end();
//    }
//   res.write("saya nodde.js");
//   res.end();
});

const port = 3000;
server.listen(port, () => {
    console.log(`server berjalan di http://localhost:${port}`);
});
