const http = require('http')
const { test, newFunction } = require('./function');
const { error } = require('console');

const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('nyampe');
        }, 1000 * 5);
    });
}

var server = http.createServer(async (req, res) => {
    // res.write('qwerty');
    // res.end();

    switch (req.url) {
        case '/about':
            // test();
            // newFunction('dari mesej');
            console.log('otw');
            const value = await
            printAgakTelat()
            console.log(value);
            console.log('ngopi');
            res.write('ini about');
            res.end();
            break;
        case '/home':
            res.write('home');
            res.end();
            break;
        default:
            res.write('404 not found');
            res.end();
            break;
    }

    // if (req.url == '/about') {
    //     res.write('ini about');
    //     res.end();
    // } else if (req.url == '/home') {
    //     res.write('ini home');
    //     res.end();
    // } else {
    //     res.write('404 not found');
    //     res.end();
    // }
});

const port = 3300;
server.listen(port, () => {
    console.log(`berjalan di http://localhost:${port}`);
});
