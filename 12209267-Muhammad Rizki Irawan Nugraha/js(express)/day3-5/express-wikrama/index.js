//impor
const express = require('express');
const bookRouter = require('./router/book-router');
const authorRouter = require('./router/author-router');
const authRouter = require('./router/auth-router');
const authenticateJWT = require('./middleware/jwt-auth-middleware');



//instansiasi
const app = express();

app.use(express.json());
//middleware request body
app.use(express.urlencoded( {
    extended: true
}));

//HTTP method: GET, POST, PUT/PATCh, DElETE

app.use('/book', authenticateJWT, bookRouter);
app.use('/penulis', authorRouter);
app.use('/auth', authRouter);

app.listen(7000, () => {
    console.log(`Server berjalan di http://localhost:7000`);
});

// // localhost:7000/contohparam/asep?sort=asc

// const siswa = [
//     {
//         id: 1,
//         nama: 'Asep',
//     },
//     {
//         id: 2,
//         nama: 'Brody',
//     },
//     {
//         id: 2,
//         nama: 'Ichn',
//     },
// ];


// app.post('/test', (req, res) => {
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

// app.get('/contohparam/:username', (req, res) => {

//     // const {username, id} = req.params;
//     // res.send(username)

//     const { sort } = req.params;

//     res.send(sort ?? 'desc');
// });
// //root
// app.get('/', handle);
// app.get('/home', handleHome);
// app.get('/about', handleAbout);
// app.get('/contact', handleContact);
// app.get('/news', handleNews);


