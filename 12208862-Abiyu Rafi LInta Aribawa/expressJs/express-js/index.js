// Import 
const express = require('express');
const bookRouter = require('./router/book-router')
const penulisRouter = require('./router/penulis-router')
const authRouter = require('./router/auth-router')
const cors = require('cors');
const authenticateJWT = require('./middleware/jwt-auth-middleware')
// Instansiasi
const app = express();

app.use(cors())
app.use(express.json());
app.use(express.urlencoded({
    extended: true
}));

//book routin with book router
app.use('/book', bookRouter);
app.use('/penulis', penulisRouter);
app.use('/auth', authRouter);
app.get('/book/:id/:booknama/:tahun', (req, res) => {npm 
    res.send(req.params)
})
app.get('/filter', (req, res) => {
    res.send(req.query)
})


app.listen(3300, () => {
    console.log('Server Berjalan di http://localhost:3300');
});
