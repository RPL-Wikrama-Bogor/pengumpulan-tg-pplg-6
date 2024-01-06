const express = require('express');
//inisialisasi
const app = express()

const penulisRouter = require('./router/penulis-router')
const bookRouter = require('./router/book-router')
const authRouter = require('./router/auth-router')
const authenticateJWT = require('./middleware/jwt-auth-middleware')

// Middleware JSON Parser
app.use(express.json())

//Middleware request body
app.use(express.urlencoded({
    extended: true,
}))

app.use('/book', authenticateJWT,bookRouter)
app.use('/penulis', penulisRouter)
app.use('/auth',authRouter)


// // HTTP Method: GET, POST, PUT/PATCH, DELETE
// // app.get('/',(req,res) =>{
// //     res.send('<h1>Welcome to Express</h1>');
// // })

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
//     },
// ]
// const {handleAbout, handleContact, handleHome, handleNews, handler} = require('./router.js')

//localhost:3000/contohparam/hen?sort=asc

// app.get('/contohparam/:username',(req,res)=>{

//     //deconstructor
//     // const {username,id} = req.params 

//     // res.send(username)
//     // res.send(req.query.sort ?? 'desc')
     
//     const { sort } = req.query

//     res.send(sort ?? 'desc')
// });

// app.post('/test', (req,res)=>{
//     res.send('POST test')
// });
// app.put('/test', (req,res)=>{
//     res.send('PUT test')
// })
// app.delete('/test', (req,res)=>{
//     res.send('DELETE test')
// })

// app.get('/siswa/:id', (req,res)=>{
//     const {id} = req.params
//     const student = siswa.find((student)=>
//         student.id === parseInt(id))
//     res.send(student.nama)
// });

// app.get('/', handler);
// app.get('/home', handleHome);
// app.get('/about', handleAbout);
// app.get('/contact', handleContact);
// app.get('/news', handleNews);

app.listen(3000, ()=>{
    console.log('Server hadir http://localhost:3000')
})