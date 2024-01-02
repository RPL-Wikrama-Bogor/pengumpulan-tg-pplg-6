//Import
const express = require('express');
const bookRouter = require('./router/book-router');
const penulisRouter = require('./router/penulis-router');
const authRouter = require('./router/auth-router');
const authenticateJWT = require('./middleware/jwt-auth-middleware');

//Instansiasi
const app = express();

// Middleware JSON Parser
app.use(express.json());

// Middleware request body
app.use(express.urlencoded({
    extended: true
}));

// Book routing with Book Router
app.use('/book', authenticateJWT, bookRouter);
app.use('/penulis', penulisRouter);
app.use('/auth', authRouter);

//HTTP Method: GET, POST, PUT/PATCH, DELETE

app.listen(3000, () => {
    console.log(`Server berjalan di http://localhost:3000`);
});

// url Root
// app.get('/',)

// localhost:3000/contohparam/han?sort=asc

// const siswa = [
//     {
//         id: 1,
//         nama: 'Ivan',
//     },
//     {
//         id: 2,
//         nama: 'Barnes',
//     },
//     {
//         id: 3,
//         nama: 'Fakhri',
//     },
// ];

// app.post('/test', (req, res) => {
//     res.send('POST test');
// });
// app.put('/test', (req, res) => {
//     res.send('PUT test');
// });
// app.delete('/test', (req, res) => {
//     res.send('DELETE test');
// });

// app.get('/siswa/:id', (req, res) => {
//     const { id } = req.params;

//     const student = siswa.find((student) => 
//     student.id == parseInt(id));

//     res.send(student.nama);
// });

// app.get('/contohparam/:username', (req, res) => {
//     // const username = req.params.username';
//     // const test = req.params.test';
//     // const id = req.params.id';

//     // // Deconstuctor
//     // const {username, id} = req.params;
//     // res.send(username);
//     const { sort } = req.query;

//     res.send(sort ?? 'desc');
// });

// app.get('/', handle);
// app.get('/home', Home);
// app.get('/about', About);
// app.get('/contact', Contact);
// app.get('/news', News);