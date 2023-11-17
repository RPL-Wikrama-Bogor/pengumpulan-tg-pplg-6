//import
const express = require('express');
const bookRouter = require('./router/book-router');
const authorRouter = require('./router/author-router');
const authRouter = require('./router/auth-router');
const authenticateJWT = require('./middleware/jwt-auth-middleware');
// const bookController = require('./controllers/book-controller')

//instansiasi
const app = express();

//middleware JSON Parser
app.use(express.json());

//middleware request body
app.use(express.urlencoded({
    extended: true
}));

// book routing with book router
app.use('/book', authenticateJWT, bookRouter);
app.use('/author', authorRouter);
app.use('/auth', authRouter);

//HTTP Method: GET, POST, PUT/PATCH, DELETE

app.listen(3000, () => {
    console.log(`Server berjalan di http://localhost:3000`);
});
// const { home, about, contact, news, } = require('./router.js');


// const siswa = [
//     {
//         id: 1,
//         nama: 'Onyy',
//     },
//     {
//         id: 2,
//         nama: 'Machuu',
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
//     const student = siswa.find((student) => student.id === parseInt(id))
//     res.send(student.nama)
// });

// //localhost:3000/contohparam/machu?sort=asc
// //root
// app.get('/contohparam/:username', (req, res) => {
//     const {username, id} = req.params;
//     res.send(req.query.sort ?? 'desc');
// });

// app.get('/home', home ); 
// app.get('/about', about); 
// app.get('/contact', contact); 
// app.get('/news', news); 

