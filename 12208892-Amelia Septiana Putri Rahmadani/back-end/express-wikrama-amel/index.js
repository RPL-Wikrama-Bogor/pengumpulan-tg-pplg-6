//import
const express = require('express');
//inisialisasi
// const bookController = require('./controllers/book-controller')
const bookRouter = require('./router/book-router');
const authorRouter = require('./router/author-router');
const authRouter = require ('./router/auth-router');
const cors = require('cros');
const authenticateJWT = require('./middleware/jwt-auth-middleware');
//Instansiasi
const app = express();
app.use(cors());
//Middleware JSON Parser
app.use(express.json());

//Middleware request body
app.use(express.urlencoded({
    extended: true
}));


app.use('/book', authenticateJWT, bookRouter);
app.use('/author', authorRouter);
app.use('/auth', authRouter);
    
// const { handler, handleHome, handleAbout, handleContact, handleNews } = require('./router.js');

// app.get('/book', bookController.getBooks);
// app.get('/book/:id', bookController.getBook);
// app.post('/book', bookController.addBook);
// app.put('/book/:id', bookController.editBook);
// app.delete('/book/:id', bookController.deleteBook);


app.listen(3000, () => {
    console.log(`Server berjalan di http://localhost:3000`);
});