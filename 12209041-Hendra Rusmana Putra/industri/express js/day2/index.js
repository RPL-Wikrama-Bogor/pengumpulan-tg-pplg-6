const http = require("http")
//CommonJS /ESM - Ecmascript
const { newFunction, testFunction} = require('./function.js')
const { error } = require("console")

const printAgakaTelat = () => {
    return new Promise((resolve, reject)=>{
        setTimeout(()=>{
            resolve('Sudah sampai')
            // reject('Saya kena tilng')
        }, 1000 * 5)
    })
}


var server = http.createServer(async(req,res)=>{
    switch (req.url) {
        case '/about':
            console.log('Saya otw');
            const value = await
            printAgakaTelat() 
            console.log(value)
            console.log('ngopi')    

            
            // testFunction()
            // newFunction('Ini berasal dari parameter newFuntion')
            res.write('Ini About')
            res.end()
            break;
        case '/':
            res.write('Ini Home')
            res.end()
            break
        default:
            res.write('404 Not Found')
            res.end()
            break;
    }

    // if (req.url == '/about') {
    //     res.write('Ini about')
    //     res.end()
    // }else if (req.url == '/contact') {
    //     res.write('Ini Contact')
    //     res.end()
    // } else {
    //     res.write('404 Not Found')
    //     res.end()
    // }

})

const port = 3000
server.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`)    
})
