//import
const express = require('express'); 
const bookRouter = require('./router/book-router');
const authorRouter = require('./router/author-router');
const authRouter = require('./router/auth-router');
const authenticateJWT = require('./middleware/jwt-auth-middleware');

// const bookController = require('./controllers/book-controller');

//instansiasi
const app = express(); 
const port = 3000;

//Middleware JSON Parser
app.use(express.json());

//Middleware request body
app.use(express.urlencoded({
    extended:true
}));

//Book routing with book router
app.use('/book', authenticateJWT, bookRouter);
app.use('/author', authenticateJWT, authorRouter);
app.use('/auth', authenticateJWT, authRouter);

app.listen(port, () => {
    console.log(`Server berjalan di http://localhost:3000`);
});