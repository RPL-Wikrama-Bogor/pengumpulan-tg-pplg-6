//import
const express = require('express');
const {handlerHome, handlerContact, handlerAbout} = require('./router');

//instansiasi express
const app = express();

// HTTP Method: 
// GET : mengambil data
// POST : mengirim data dr klien ke server , bisa bikin data baru
// PUT/PATCH : spesifiknya untuk mengedit data
// DELETE

// ------------------------------------------------------------------------

//jika klien mengakses path dgn get maka ini akan dieksekusi

// app.get('/', (req, res) => {
//     // kalo send, itu bakal dikirim sebagai html
//     res.send('<h1>Welcome to Express</h1>');
// })

// CONTOH PENGGUNAAN PARAMS
const siswa = [
   {
      id : 1,
      nama: 'Ivan',
   },
   {
      id : 2,
      nama: 'Barnes',
   },
   {
      id : 3,
      nama: 'fakhri',
   },
];

app.post('/test', (req, res) => {
   res.send('POST test');
});
app.put('/test', (req, res) => {
   res.send('PUT test');
});
app.delete('/test', (req, res) => {
   res.send('DELETE test');
});


app.get('/siswa/:id', (req, res)=>{
   const { id } = req.params;

   const students = siswa.find ((students)=> 
   students.id == parseInt(id))
   res.send(students.nama);
});

//http://localhost:3000/contohparam/jihan?sort=asc

// app.get ('/contohparam/:username', (req, res)=>{
//    // const username = req.params.username;
//    // const test = req.params.test;
//    // const id = req.params.id;

//    // DECONSTRUCTOR
//    // const {username, test, id} = req.params;

//    // res.send(req.params);

//    const { sort } = req.query;

//    res.send(sort ?? 'desc');
// });

app.get('/home', handlerHome);
app.get('/contact', handlerContact);
app.get('/about', handlerAbout);

// menjalankan server, app diikat ke port 3000

app.listen(3000, () => {
   console.log('Server berjalan di http://localhost:3000')
});