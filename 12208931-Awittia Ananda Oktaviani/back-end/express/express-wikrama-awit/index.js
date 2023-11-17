//import
const express = require('express');
// const bookController = require('./controllers/book-controller');
const bookRouter = require('./router/book-router');
const penulisRouter = require('./router/penulis-router');
const authRouter = require('./router/auth-router');
const authenticateJWT = require('./middleware/jwt-auth-middleware');

var cors = require('cors')
//instansiasi
const app = express();

// middleware JSON parser 
app.use(cors())
app.use(express.json()); // permintaan ke JSON

// middleware request body
app.use(express.urlencoded({ // bentuknya string yg masuk ke dalam url
    extended: true
}));

app.use('/book', authenticateJWT, bookRouter);
app.use('/penulis', penulisRouter);
app.use('/auth', authRouter);



//HTTP Method: Get, Post(ngirim data), Put/PATCH(mengedit data yang sudah ada), Delete

//URL Root
//localhost:3000/contohparam/mel?sort-asc
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

// app.post('/test', (req,res) => {
//     res.send('POST test nodemon');
// });
// app.put('/test', (req,res) => {
//     res.send('PUT test');
// });
// app.delete('/test', (req,res) => {
//     res.send('DELETE test');
// });

// app.get('/siswa/:id/', (req,res) => {
//     const { id } = req.params;
//     const student = siswa.find((student) => 
//     student.id == parseInt(id))
//     res.send(student.nama);
// });
// app.get('/contohparam/:username', (req,res) => {
    //const username = req.params.username
    //const test = req.params.test
    //const id = req.params.id
    // const {username, id} = req.params;
    // const { sort } = req.query;
    // res.send(sort ?? 'desc');
    // res.send(req.params.username);
// });

// app.get('/', handler);
// app.get('/book', bookController.getBooks);
// app.get('/book/:id', bookController.getBook);
// app.post('/book', bookController.addBook);
// app.put('/book/:id', bookController.editBook);
// app.delete('/book/:id', bookController.deleteBook);
// app.get('/', (req, res) => {
//     res.send('<h1>Welcome to Express</h1>');
// }); 

app.listen(3000, () => {
    console.log(`Server berjalan di http://localhost:3000`);
});