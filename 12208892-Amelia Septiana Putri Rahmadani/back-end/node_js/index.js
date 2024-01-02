const  http = require('http');
//common JS/ ESM/EcmaScripth
const { testfunction, newFunction } = require('./function');
// const { default: test } = require('node:test');

//promise
const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Sudah sampai')
            // reject('Saya kena tilang')
            // console.log('Sudah sampai');
        }, 1000 * 5);
    } );
    
}

var server = http.createServer(async(req,res) => {
    // res.write('Saya node.js');
    // res.end();
    //http://localhost:3000/about
    // /about
    switch (req.url) {
        case '/about':
            console.log('Saya otw');
            const value = await
            printAgakTelat();
            console.log(value);
            console.log('Ngopi');
            // printAgakTelat() 
            //     .then ((value) => {
            //      console.log(value);
            //      console.log('Ngopi');
            // }) 
            // .catch ((error) => 
            //     console.log(error));   
            
            // testfunction();
            // newFunction( 'ini berasal dari parameter ');
            res.write('ini about');
            res.end();
            break;
        case '/contact':
            res.write('ini contact');
            res.end();
            break; 
        default:
            res.write('404 Not Found');

    }

    // if (req.url == '/about') {
    //     res.write('ini about');
    //     res.end();
    // } else {
    //     res.write('404 Not Found');
    //     res.end();
    // }
});

const port = 3000;
server.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`);
});
