//1 ka fema
let angka = [ 1, 2, 3, 4 ,5 ];
angka.splice( 2, 1); 
console.log(angka); 
//splice bisa untuk menambah, 
//menghapus, mengubah item, (2 = index ke brp, 1 = menghapus 1  item)


//2
var myArray = [1, 2, 3, 4, 5];
var removedElement = myArray.shift(); // Menghapus dan mengembalikan elemen pertama (1)
console.log(myArray);


//3
var myArray = [1, 2, 3, 4, 5];
var newLength = myArray.push(6, 7); // Menambahkan elemen 6 dan 7 ke akhir array
console.log(myArray);


//4 router
const http = require('http');

var server = http.createServer((req, res) => {
    // res.write('Saya node.js');
    // res.end();

    //router sederhana
    
    //bisa pake if
    if (req.url == '/about'){
        res.write('Ini About');
        res.end();
    } else if (req.url == '/contact') {
        res.write('Ini contact');
        res.end();
    }
    else {
        res.write('404 not found');
        res.end();
    }

    //bisa pake switch
    switch (req.url) {
        case '/about' :
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
//--------------------------------------------------------------




//5 saya otw, ngopi, sudah sampai
const http = require('http');
const {testFunction, newFunction} = require('./function');

//promise
const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            console.log('Sudah Sampai');
        }, 1000 * 5);
    });
}

var server = http.createServer((req, res) => {

    switch (req.url) {
        case '/about' :
            // testFunction();
            // newFunction('Ini berasal dari parameter');
            console.log('Saya otw');
            printAgakTelat().then((value) => console.log(value).catch((error) => console.log(error)));
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
//--------------------------------------------------------------



//6 saya otw, sudah sampai, ngopi
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

var server = http.createServer((req, res) => {
    switch (req.url) {
        case '/about' :
            // testFunction();
            // newFunction('Ini berasal dari parameter');
            console.log('Saya otw');
            printAgakTelat().then((value) => { 
                console.log(value); 
                console.log('Ngopi');
            }).catch((error) => console.log(error));
            // console.log('Ngopi');
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
//--------------------------------------------------------------




//7 sama sprti no 6, cuma lebih simpel
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
//--------------------------------------------------------------


