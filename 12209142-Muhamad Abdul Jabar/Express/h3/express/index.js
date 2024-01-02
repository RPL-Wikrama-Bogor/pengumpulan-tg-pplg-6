const express = require('express');
const bookRouter = require('./router/book-router');
const penulisRouter = require('./router/penulis-router');
const authRouter = require('./router/auth-router');
// const cors = require('cors');
const authenticateJWT = require('./middleware/jwt-auth-middleware');
// const { handFirst, handleHome, handleAbout, handleContact, handleNews } = require('./router');
// const bookController = require('./controllers/book-controller');


// instansiasi
const app = express();

app.use(express.json());

app.use(express.urlencoded({
    extended: true
}));


app.use('/book',authenticateJWT, bookRouter);
app.use('/penulis',authenticateJWT, penulisRouter);
app.use('/auth',authenticateJWT, authRouter);
// // localhost:3000/contohparam/han?sort=asc

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
//     }
// ];

// app.post('/test', (req,res) => {
//     res.send('POST test')
// });
// app.put('/test', (req,res) => {
//     res.send('PUT test')
// });
// app.delete('/test', (req,res) => {
//     res.send('DELETE test')
// });


// app.get('/siswa/:id', (req, res) => {
//     const { id } = req.params;
//     const student = siswa.find((student) => student.id === parseInt(id))


//     res.send(student.nama)
// });

// app.get('/contohparam/:username', (req, res) => {
//     // res.send(req.params.username);

//     // Deconstructor
//     // const {username, id} = req.params
//     // 
//     const { sort } = req.query;
//     res.send(sort ?? 'desc');
// });

// app.get('/', handFirst);
// app.get('/home',  handleHome);
// app.get('/about', handleAbout);
// app.get('/contact', handleContact);
// app.get('news', handleNews);


app.listen(3000, () => {
    console.log(`Server berjalan di http://localhost:3000`);
})