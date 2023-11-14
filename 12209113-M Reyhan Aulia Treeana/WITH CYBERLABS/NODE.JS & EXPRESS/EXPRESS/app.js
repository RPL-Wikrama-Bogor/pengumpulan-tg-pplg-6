const express = require('express')
const app = express()
app.use(express.json())
const bookRouter = require('./router/book-router');
const penulisRouter = require('./router/penulis-router');
const authRouter = require('./router/auth-router');
const jwt = require('jsonwebtoken');
const accessTokenSecret = '2023-wikramA-exp';




// middleware request body
app.use(express.urlencoded({extended: true}));

const authencticateJWT = (req, res, next) => {
    const authHeader = req.headers.authorization;

    if(!authHeader){
        return res.status(403).json({message: "Unauthorized"});
    }

    const token = authHeader.split(' ')[1];

    jwt.verify(token, accessTokenSecret, (err, user) => {
        if(err) {
            return res.status(403).json({message: "coeg abis"});
        }

        next();
    });
};





// kalo di
// const { handler, handlerAbout } = handler = require('./router')
// const handler = require('./router')

// const siswa = [
//   {
//     'id': 1,
//     "nama" : "Reyhan" 
//   },
//   {
//     'id': 2,
//     "nama" : "Barnes" 
//   },
//   {
//     'id': 3,
//     "nama" : "Hans" 
//   },
// ]

// app.get('/siswa/:id', (req, res) => {
//   const { id } = req.params;
//   const student = siswa.find((student) => student.id === parseInt(id));
//   res.send(student.nama);
// });

// // app.get('/student/:id', (req, res) => {
// //   const { id } = req.params;
// //   res.send(siswa[id])
// // })

// // app.get('/contohparam/:username', (req, res) => {

// //   // deconstructor
// //   // const (username, id) = req.params
// //   // res.send(username);

// //   // const { sort } = req.qeury;

// //   res.send(req.query.sort ?? 'desc');
// // })

// app.post('/test', (req,res) => {
//   res.send('POST Test')
// });
// app.put('/test', (req,res) => {
//   res.send('PUT Test')
// });
// app.delete('/test', (req,res) => {
//   res.send('DELETE Test')
// });

const PORT = 3000;
app.get('/', (req, res) => res.send('Hello World!'));
// app.get('/', handler)
// // app.get('/about', handlerAbout)
app.use('/book', authencticateJWT, bookRouter);
app.use('/penulis', penulisRouter);
app.use('/auth', authRouter);


app.listen(PORT, () => 
    console.log('Server berjalan di http://localhost:' + PORT)
);

// helper function cuy

