// import
// const express = require('express');const {handler, handlercontact, handlerabout, handlerservices, handlerportofolio} = require('./router');

const express = require ('express');
const bookRouter = require('./router/book-router');
const bukuRouter = require('./router/buku-router');
const authRouter = require('./router/auth-router');
const cors = require('cors')
const authenticateJWT = require('./middleware/jwt-auth-middleware');
const dbConfig = require('./config/database')
const pool = mysql.createPool(dbConfig)

pool.on('error', (err) => {
  console.log(err)
})

const app = express()
const PORT = 7000

app.use(cors())
app.use(express.json())
app.use(express.urlencoded({
    extended: true
})
)
app.get('/contohparameter/:username/:jurusan/:kelas', (req, res) => {
  res.json(req.params)
})

app.get('/contohparam', (req, res) => {
  res.json(req.query)
})

app.get('/', (req, res) => {
  res.write('Hello World')
  res.end()
})


app.use('/book', authenticateJWT, bookRouter);
app.use('/buku', bukuRouter);
app.use('/auth', authRouter);

app.listen(PORT, () => {
  console.log(`server berjalan di http://localhost:${PORT}`)
})