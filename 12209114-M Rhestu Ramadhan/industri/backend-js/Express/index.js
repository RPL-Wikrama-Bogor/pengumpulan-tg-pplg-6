//import
const express = require('express');
const bookRouter = require ('./router/book-router');
const penulisRouter = require ('./router/penulis-router');
const authRouter = require ('./router/auth-router');
// const cors = require ('cors')
const authenticateJWT = require ('./middleware/jwt-auth-middleware');

//instansiasi
const app = express();
// middleware JSON Parser
app.use(express.json());
// midleware request body
app.use(express.urlencoded({
    extended: true
}));
// const { handler, handleHome, handleAbout, handleContact, handleNews } = require('./router.js');


//HTTP Method: Get, Post(ngirim data), Put/PATCH(mengedit data yang sudah ada), Delete

//URL Root
//localhost:3000/contohparam/mel?sort-asc

// const siswa = [
//     {
//         id: 1,
//         nama: 'Restu'
//     },
//     {
//         id: 2,
//         nama: 'Abok'
//     },
//     {
//         id: 3,
//         nama: 'hbihbccia'
//     },
// ];

// app.post('/test', (req,res) => {
//     res.send('POST test')
// });
// app.put('/test', (req, res) => {
//     res.send('PUT test')
// });
// app.delete('/test', (req, res) => {
//     res.send('DELETE test')
// });

// app.get('/siswa/:id', (req, res) => {
//     const { id } = req.params;
//     const student = siswa.find((student) => 
//     student.id == parseInt(id) )
//     res.send(student.nama)
// });


// app.get('/contohparam/:username', (req,res) => {
//     const { sort } = req.query;
//     //const username = req.params.username
//     //const test = req.params.test
//     //const id = req.params.id
//     // const {username, id} = req.params;
//     res.send(req.query.sort ?? 'asc');
//     // res.send(req.params.username);
// });

// app.get('/', handler);
// app.get('/home', handleHome);
// app.get('/about', handleAbout );
// app.get('/contact', handleContact);
// app.get('/news', handleNews);
// // app.get('/', (req, res) => {
// //     res.send('<h1>Welcome to Express</h1>');
// // }); 
// app.get('/book', bookController.getBooks);
// app.get('/book/:id', bookController.getBook);
// app.post('/book', bookController.addBook);
// app.put('/book/:id', bookController.editBook);
// app.delete('/book/:id', bookController.deleteBook);

app.use('/book', authenticateJWT ,bookRouter);
app.use('/penulis', penulisRouter);
app.use('/auth', authRouter);

app.listen(3000, () => {
    console.log('Server berjalan di http:localhost:3000');
});