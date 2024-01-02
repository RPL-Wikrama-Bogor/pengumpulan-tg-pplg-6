// Import
const express = require('express');
const bookRouter = require('./router/book-router')
const authorRouter = require('./router/author-router')
const authRouter = require('./router/auth-router')
const authenticateJWT = require('./middleware/jwt-auth-middleware')
var cors = require('cors')

//Instansiasi
const app = express();

app.use(cors());

// Middleware JSON Parser
app.use(express.json());

// Middleware req body
app.use(express.urlencoded({
    extended: true
}));

// Book Routing with Book Router
app.use('/book', authenticateJWT, bookRouter);
app.use('/author', authorRouter);
app.use('/auth', authRouter);


app.listen(3000, () => {
    console.log('Server berjalan di http://localhost:3000')
 });