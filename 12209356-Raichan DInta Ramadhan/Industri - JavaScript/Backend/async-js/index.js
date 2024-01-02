const http = require('http');
const {newFunction, testFunction} = require('./function');
//promise
const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Sudah Sampai');
            // reject('Saya kena tilang');
        }, 1000 * 5);
    });
}

var server = http.createServer(async(req,
    res) => {
        switch (req.url) {
            case '/about' :
                console.log('saya otw');
                const value = await printAgakTelat();
                
                console.log(value);
                console.log('ngopi')
                res.write('ini about');
                res.end();
                break;
            case '/contact' :
                res.write('ini contact');
                res.end();
                break;
            default:
                res.write('404 Not Found');
                res.end();
                break;
        }
       
        // if (req.url =='/about') {
        //     res.write('Ini about');
        //     res.end();
        // } else {
        //     res.write('404 Not Found');
        //     res.end();
        // }
        
    });

    const port = 7000;
    server.listen(port, () => {
        console.log(`Server berjalan di http://localhost:${port}`);
    });