const express = require('express');
const {handle, handleHome, handleAbout, handleContact, handleNews}= require('./router');
const app = express();


const siswa =[
    {
        id:1,
        nama: 'Rizki',
    },
    {
        id:2,
        nama: 'Barnes',
    },
    {
        id:3,
        nama: 'Yoga',
    },
];

app.post('/test', (req,res) => {
    res.send('Post test nodemon');
});
app.put('/test', (req,res) => {
    res.send('Put. test');
});
app.delete('/test', (req,res) => {
    res.send('Delete. test');
});

app.get('/siswa/:id', (req, res) => {
    const { id } = req.params;

    const student =siswa.find((student) => 
    student.id == parseInt(id) )

    res.send(student.nama)
    });
app.get('contohparam/:username', (req,res) => {
    //const {username, test} = req.params;
    const { sort } = req.query;
    res.send(req.query.sort ?? 'desc');
});
app.get('/', handle);
app.get('/home', handleHome);
app.get('/about',handleAbout);
app.get('/contact',handleContact);
app.get('/news',handleNews);


app.listen(3000, () => {
    console.log(`server berjalan di http://localhost:3000`);
});