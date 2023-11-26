const http = require('http');
const { testFunction, newFunction } = require('./function')
//CommonJS /ESM -Ecmascript

const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('sudah sampai');
            // reject('saya kena tilang');
        }, 1000 * 5);
    });
}

var server = http.createServer(async(req, res) => {
    // req.url
    // if(req.url == '/about'){  //router
    //     res.write('ini about')
    //     res.end();
    // }else{
    //     res.write('404 not found');
    //     res.end();
    // }
    switch(req.url){
        case '/about':
            // testFunction();
            // newFunction('ini berasal dari parameter');
            console.log('saya otw');
            const value = await
            await printAgakTelat();
            console.log(value);
            console.log('ngopi')
            res.write('ini about');;
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
});

const port = 3000;
server.listen(port, () => {
    console.log(`server berjalan di http://localhost:${port}`);
});
