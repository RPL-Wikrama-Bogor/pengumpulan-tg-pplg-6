const http = require('http');
const {testFunction, newFunction} = require('./function');

//promise
const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Sudah sampai');
            // reject('Ngopi dulu bentar');
            // console.log('Sudah Sampai');
        }, 1000 * 5);
    });
}

var server = http.createServer(async (req, res) => {
    // if (req.url == '/about'){
    //     res.write('Ini About');
    //     res.end();
    // } else if (req.url == '/contact') {
    //     res.write('Ini contact');
    //     res.end();
    // }
    // else {
    //     res.write('404 not found');
    //     res.end();
    // }
    switch (req.url) {
        case '/about' :
            // testFunction();
            // newFunction('Ini berasal dari parameter');
            console.log('Saya otw');
            const value = await
            printAgakTelat();
            console.log(value);
            console.log('Ngopi');
            res.write('Ini about');
            res.end();
            break;
        case '/contact' :
            res.write('Ini contact');
            res.end();
            break;
        default :
            res.write('404 not found');
            res.end();
            break;
    }
});

const port = 3000;
server.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`);
});
