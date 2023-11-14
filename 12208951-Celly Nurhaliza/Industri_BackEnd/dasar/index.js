const http = require('http');
const { testFunction, newFunction } = require('./function');

const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Sudah sampai');
            // reject('Sudah kena tilang');
        }, 1000 * 5);
    });
}

var server = http.createServer(async(req, res) => {
    switch (req.url) {
        case '/about':
            console.log('Saya otw');
            const value = await
            printAgakTelat();
            console.log(value);
            console.log('Ngopi');
            // printAgakTelat()
            //     .then((value) => {
            //         console.log(value);
            //         console.log('Ngopi');
            //     })
            //     .catch((error) => 
            //         console.log(error));
            res.write('Ini about');
            res.end();
            break;
        case '/contact':
            res.write('Ini contact');
            res.end();
            break;
        default:
            res.write('404 Not Found');
            res.end();
            break;
    }

    // if (req.url == '/about') {
    //     res.write('Ini about');
    //     res.end();
    // } else if (req.url == '/contact') {

    // } else {
    //     res.write('404 Not Found');
    //     res.end();
    // }
});

const port = 3000;
server.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`);
}); 