//import
const express = require('express');
const bookRouter = require('./router/book-router');
const penulisRouter = require('./router/penulis-router');
const authRouter = require('./router/auth-router')
const authenticateJWT = require('./middleware/jwt-auth-middleware');
//cors
var cors = require('cors')

//instansiasi
const app = express();

//cors
app.use(cors())

//midleware JSON Parser
app.use(express.json());

//midleware request body
app.use(express.urlencoded({
    extended: true
}));

//book routing with book router
app.use('/book', authenticateJWT, bookRouter);
app.use('/penulis', penulisRouter);
app.use('/auth', authRouter);

app.listen(3000, () => {
    console.log(`Server berjalan di http://localhost:3000`);
});