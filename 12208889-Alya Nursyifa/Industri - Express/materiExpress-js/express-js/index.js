
//import
const express = require('express'); 

//instansiasi
const app = express(); 
const {handler,  handleHome, handleAbout, handleContact, handleNews} = require('./router.js');
const port = 3000;

//HTTP Method: GET, POST, PUT/PACTH, DELETE
//root
// app.get('/', (req, res) => {
//     res.send('<h1>Welcome to Express</h1>');
// });

//http://localhost:3000/contohparam/alyaa?sort=asc

const siswa = [
    {
        id: 1,
        nama: 'Alya'
    },
    {
        id: 2,
        nama: 'Feitan'
    },
    {
        id: 3,
        nama: 'Kuromi'
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

app.get('/siswa/:id', (req, res) => {
    const { id } = req.params;
    // res.send(siswa[id].nama);
    const student = siswa.find((student) => 
    student.id == parseInt(id))

    res.send(student.nama)
});

app.get('/contohparam/:username', (req, res) => {
    // const username = req.params.username;
    // const name = req.params.name;
    // const id = req.params.id;
    // Deconstructor
    // const{username, name, id} = req.params;
    // res.send(username);
    const { sort } = req.query;

    res.send(req.query.sort ?? '<h1>Hello World!</h1>');
});

app.get('/', handler);
app.get('/home', handleHome );
app.get('/about', handleAbout );
app.get('/contact', handleContact );
app.get('/news', handleNews );

app.listen(port, () => {
    console.log(`Server berjalan di http://localhost:3000`);
})