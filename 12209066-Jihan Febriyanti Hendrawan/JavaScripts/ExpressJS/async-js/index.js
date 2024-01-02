const http = require('http');
//ComomJS / ESM  - Ecmascript
const {newFunction, testFunction} = require('./function');

const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('sudah sampai');
            // reject('saya kena tilang');
        }, 1000 * 5);
    });
}
var server = http.createServer (async (req, res)=>{
    //  res.write('saya node js')
    //  res.end()
    switch (req.url){
    case '/about':
        console.log('saya otw');
        const value = await printAgakTelat();
        console.log(value);
        console.log('ngopi');
        res.write('saya about')
        res.end();
        break;
    case '/contact':
 
        res.write('saya contact')
        res.end();
         break;
    default: 
        res.write('404 NOT FOUND')
        res.end();
        break;
    }
 
    // if(req.url == '/about'){
    //       res.write('saya about')
    //       res.end();
    // } else if (req.url == '/contact'){
    //     res.write('saya Contact')
    //     res.end();
    // } else {
    //     res.write('404 NOT FOUND')
    //     res.end();
    // }
});

const port = 3000;
server.listen(port, () => {
    console.log(`server berjalan di http://localhost:${port}`);
});
