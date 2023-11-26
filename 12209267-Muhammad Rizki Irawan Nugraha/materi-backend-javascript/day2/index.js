const http = require('http');
const testFunction = require('./index.js');

var server = http.createServer((req, res) => {
    // http://localhost:3000/about
    // /about
    // if (req.url == '/about') {
    //     res.write('Ini about');
    //     res.end();
    // } else{
    //     res.write('404 Not Found');
    //     res.end();
    // }

    switch(req.url){
        case '/about':
            testFunction();
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
});

const port = 3000;
server.listen(port);
console.log(`Server berjalan di http://localhost:${port}`);