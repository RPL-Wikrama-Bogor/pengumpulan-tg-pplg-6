const http = require('http');
const { testFunction, newFunction } = require('./function');

///promise
const printTelat = () => {
    return new Promise((resolve, reject) =>
    {
        setTimeout(() => {
          resolve('saya sudah sampai');
        }, 1000 * 5);
    });

  
}

var server = http.createServer
(async(req,
    res) => {

    switch (req.url) {

        case '/about':
            console.log('saya otw');
           const value = await
            printTelat();
            console.log(value);
           console.log('ngopi');
            res.write('ini about');
            res.end();
            break;
        case '/contact':
            res.write('ini contact');
            res.end();
            break;
        default:
            res.write('404 Not Found');
            res.end();
            break;

       }
        
    });

    const port = 7000;
    server.listen(port, () => {

    console.log(`server berjalan di http://localhost:${port}`);

});